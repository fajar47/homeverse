<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ShowUsers()
    {
        $all = DB::table('users')->get();
        return view('admin.users.user_data', compact('all'));
    }

    public function AddUsers()
    {
        return view('admin.users.user_add');
    }

    public function InsertUsers(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['role'] = $request->role;
        $data['password'] = Hash::make($request->password);
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $insert = DB::table('users')->insert($data);
        if ($insert) {
            $notification = array(
                'messege' => 'Successfully User Inserted',
                'alert-type' => 'success',
            );
            return redirect()->route('ShowUsers')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Something is Wrong, please try again!',
                'alert-type' => 'error',
            );
            return redirect()->route('ShowUsers')->with($notification);
        }
    }

    public function EditUsers($id)
    {
        $edit = DB::table('users')->where('id', $id)->first();
        return view('admin.users.user_edit', compact('edit'));
    }

    public function UpdateUser(Request $request, $id)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['role'] = $request->role;
        $data['password'] = Hash::make($request->password);
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $update = DB::table('users')->where('id', $id)->update($data);
        if ($update) {
            $notification = array(
                'messege' => 'Successfully User Updated',
                'alert-type' => 'success',
            );
            return redirect()->route('ShowUsers')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Something is Wrong, please try again!',
                'alert-type' => 'error',
            );
            return redirect()->route('ShowUsers')->with($notification);
        }
    }

    public function DeleteUser($id)
    {
        $delete = DB::table('users')->where('id', $id)->delete();
        if ($delete) {
            $notification = array(
                'messege' => 'Successfully User Deleted',
                'alert-type' => 'success',
            );
            return redirect()->route('ShowUsers')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Something is Wrong, please try again!',
                'alert-type' => 'error',
            );
            return redirect()->route('ShowUsers')->with($notification);
        }
    }
}
