<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\RecordHistory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;

use DataTables;
use Illuminate\Support\Facades\Auth;

class RecordController extends Controller
{
    public function list( Request $req)
    {

        if ($req->ajax()) {
            $query = RecordHistory::query();
           if(isset($req->record_filter))
           {
               $query = $query->where('update_status',$req->record_filter);
           }

            return DataTables::eloquent($query)
                ->addIndexColumn()
                ->addColumn('r_no', function ($row) {
                return $row->r_no;
            })
                ->editColumn('balance', function ($row) {
                return $row->balance;
            })
                ->editColumn('name', function ($row) {
                return $row->name;
            })
                ->editColumn('father_name', function ($row) {
                return $row->father_name;
            })
            ->editColumn('new_nic', function ($row) {
                return $row->new_nic;
            })
            ->editColumn('old_nic', function ($row) {
                return $row->old_nic;
            })
            ->editColumn('update_status', function ($row) {
                return $row->update_status;
            })
                ->addColumn('action', function ($row) {
                    $html = '';

                  if($row->update_status != 'approved')
                  {
                      $html.='
                      <a href="' . route('record-history.approve', $row->id) .'"class="btn btn-success btn-sm"'. '" onclick="event.preventDefault(); approveMsg(\'' . route('record-history.approve', $row->id) . '\')">approve</a>
                      <a href="' . route('record-history.reject', $row->id) . '"class="btn btn-danger btn-sm"'.'" onclick="event.preventDefault(); rejectMsg(\'' . route('record-history.reject', $row->id) . '\')">reject</a>
                      ';
                  }
                  if(($row->user_id==Auth::id() || auth()->user()->id) && $row->update_status != 'approved')
                  {
                      $html.='
                      <a href="' . route('record-history.edit', $row->id) . '" class="btn btn-primary btn-sm">edit</a>
                      ';
                  }

                return $html;
            })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('records.record-history', get_defined_vars());
    }

    public function approve(Request $req, $id)
    {
        //changing status
        $approve_record = RecordHistory::findOrFail($id);
        $approve_record->update_status= 'approved';
        $approve_record->save();

        //update record
        $record = Record::findOrFail($approve_record->record_id);
        $record->r_no = $approve_record->r_no;
        $record->balance = $approve_record->balance;
        $record->option = $approve_record->option;
        $record->status = $approve_record->status;
        $record->number = $approve_record->number;
        $record->name = $approve_record->name;
        $record->father_name = $approve_record->father_name;
        $record->bps = $approve_record->bps;
        $record->birth = $approve_record->birth;
        $record->retirement = $approve_record->retirement;
        $record->death = $approve_record->death;
        $record->new_nic = $approve_record->new_nic;
        $record->documents = $approve_record->documents;
        $record->demand = $approve_record->demand;
        $record->pifra = $approve_record->pifra;
        $record->designation = $approve_record->designation;
        $record->h_no = $approve_record->h_no;
        $record->street = $approve_record->street;
        $record->colony = $approve_record->colony;
        $record->city = $approve_record->city;
        $record->posting = $approve_record->posting;
        $record->final = $approve_record->final;
        $record->phone_home = $approve_record->phone_home;
        $record->mobile = $approve_record->mobile;
        $record->old_nic = $approve_record->old_nic;
        $record->balating = $approve_record->balating;
        $record->new_no = $approve_record->new_no;
        $record->comment = $approve_record->comment;
        $record->d_call = $approve_record->d_call;
        $record->created_at = Carbon::now();
        $record->updated_at = Carbon::now();
        $record->save();

        return redirect()->back()->with('success', 'Record For Updation Is Approved');

    }

    public function reject($id)
    {
        $reject_record = RecordHistory::findOrFail($id);
        $reject_record->update_status= 'rejected';
        $reject_record->save();
        return redirect()->back()->with('success', 'Record For Updation Rejected ');
    }
    public function editRecordHistory($id)
    {
        $data = RecordHistory::find($id);
        return view('records.edit-record-history',get_defined_vars());
    }

    public function updateRecordHistory(Request $req, $id)
    {

        $record = RecordHistory::find($id);
        $record->r_no = $req->r_no;
        $record->balance = $req->balance;
        $record->option = $req->option;
        $record->status = $req->status;
        $record->number = $req->number;
        $record->name = $req->name;
        $record->father_name = $req->father_name;
        $record->bps = $req->bps;
        $record->birth = $req->birth;
        $record->retirement = $req->retirement;
        $record->death = $req->death;
        $record->new_nic = $req->new_nic;
        $record->documents = $req->documents;
        $record->demand = $req->demand;
        $record->pifra = $req->pifra;
        $record->designation = $req->designation;
        $record->h_no = $req->h_no;
        $record->street = $req->street;
        $record->colony = $req->colony;
        $record->city = $req->city;
        $record->posting = $req->posting;
        $record->final = $req->final;
        $record->phone_home = $req->phone_home;
        $record->mobile = $req->mobile;
        $record->old_nic = $req->old_nic;
        $record->balating = $req->balating;
        $record->new_no = $req->new_no;
        $record->comment = $req->comment;
        $record->d_call = $req->d_call;
        $record->save();

        return redirect()->back()->with('success', 'Update Request Modified Successfully');

    }

    public function recordHistoryPdf($id)
    {
        $data = RecordHistory::findOrFail($id);
        $pdf = PDF::loadView('pdf', ['data'=>$data]);
        return $pdf->download('new.pdf');
    }

    public function recordPdf($id)
    {
        $data = Record::findOrFail($id);
        $pdf = PDF::loadView('pdf', ['data'=>$data]);
        return $pdf->download('new.pdf');
    }


}
