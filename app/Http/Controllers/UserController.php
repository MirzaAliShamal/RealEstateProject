<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DataTables;


class UserController extends Controller

{
    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    public function list(Request $req)
    {

        if ($req->ajax()) {
            $query = User::where('id', '!=', 1)->orderBy('id', 'DESC');
            return DataTables::eloquent($query)
                ->addIndexColumn()
                ->addColumn('photo', function ($row) {
                return '<img src="' . asset($row->photo) . '" class="img-fluid thumb-md rounded">';
            })
                ->editColumn('name', function ($row) {
                return $row->name;
            })
                ->editColumn('email', function ($row) {
                return $row->email;
            })
                ->editColumn('role', function ($row) {
                return $row->role;
            })
                ->addColumn('action', function ($row) {
                $html = '
                    <a href="' . route('user.edit', $row->id) . '" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                    <a href="' . route('user.delete', $row->id) . '" onclick="event.preventDefault(); deleteMsg(\'' . route('user.delete', $row->id) . '\')"><i class="fas fa-trash-alt text-danger font-16"></i></a>

                    ';

                return $html;
            })
                ->rawColumns(['action', 'photo'])
                ->make(true);
        }

        return view('user.list', get_defined_vars());
    }

    public function add()
    {
        return view('user.add', get_defined_vars());
    }

    public function edit($id = null)
    {
        $data = User::find($id);
        return view('user.edit', get_defined_vars());
    }

    public function save(Request $req, $id = null)
    {
        if (is_null($id)) {
            $req->validate([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
            ]);
        }

        if (is_null($id)) {
            $user = User::create([
                'name' => $req->name,
                'email' => $req->email,
                'password' => bcrypt($req->password),
                'role' => 'staff'
            ]);
            $msg = "Record Added Successfully!";
        }
        else {
            $user = User::findOrFail($id);
            $user->name = $req->name;
            $user->email = $req->email;
            $user->role = 'staff';
            $user->save();


            $msg = "Record Edited Successfully!";
        }

        return redirect()->back()->with('success', $msg);
    }

    public function delete($id = null)
    {
        User::find($id)->delete();

        return redirect()->back()->with('success', 'Record Delete Successfully!');
    }
}
