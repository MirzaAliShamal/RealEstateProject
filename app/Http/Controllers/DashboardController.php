<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\RecordHistory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DataTables;

class DashboardController extends Controller
{
    public function dashboard(Request $req)
    {
        if ($req->ajax()) {
            $query = Record::orderBy('name');
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
                ->addColumn('action', function ($row) {
                    $html = '
                    <a href="' . route('record.show', $row->id) . '" class="btn btn-success btn-sm">details</a>
                    <a href="' . route('record.edit', $row->id) . '" class="btn btn-primary btn-sm"">edit</a>
                    ';

                    return $html;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('dashboard', get_defined_vars());
    }

    public function profile()
    {
        $user = Auth::user();
        return view('profile.userprofile', get_defined_vars());
    }
    public function general(Request $req)
    {
        $user = Auth::user();
        $req->validate([
            'email' => 'required|email',
            'name' => 'required',

        ]);

        $user->name = $req->name;
        $user->email = $req->email;
        if ($req->photo) {
            $user->photo = uploadFile($req->photo, 'uploads/profile', $req->first_name . '-' . $req->last_name);
        }
        $user->save();
        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    public function password(Request $req)
    {
        $user = Auth::user();
        $req->validate([
            'current_password' => 'required|password',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password'
        ]);
        $user->password = bcrypt($req->password);
        $user->save();

        return redirect()->back()->with('success', 'Password updated Successfully!');
    }

    //records
    public function edit($id)
    {
        $data = Record::findOrFail($id);
        return view('records.edit', get_defined_vars());
    }

    public function save(Request $req, $id)
    {
        $data = Record::find($id);

        $record = new RecordHistory();
        $record->record_id = $data->id;
        $record->user_id = Auth::id();
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
        $record->created_at = Carbon::now();
        $record->updated_at = Carbon::now();
        $record->save();
        return redirect()->back()->with('success', 'Request for Updation submitted');
    }

    public function show(Request $req, $id)
    {
        $record = Record::findOrFail($id);

        if ($req->ajax()) {
            $query = RecordHistory::with('user')->where('record_id', $id);
            return DataTables::eloquent($query)
                ->addIndexColumn()
                ->addColumn('created_at', function ($row) {
                    return  $row->created_at->format('m/d/y');
                })
                ->addColumn('user_id', function ($row) {
                    return $row->user->name;
                })
                ->addColumn('r_no', function ($row) {
                    return $row->r_no;
                })
                ->editColumn('name', function ($row) {
                    return $row->name;
                })
                ->editColumn('father_name', function ($row) {
                    return $row->father_name;
                })
                ->editColumn('balance', function ($row) {
                    return $row->balance;
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

                ->make(true);
        }

        return view('records.show', get_defined_vars());
    }
}
