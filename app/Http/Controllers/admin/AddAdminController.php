<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddAdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.add.viewAdmin');
    }

    public function create()
    {
        return view('admin.add.addAdmin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'confirm_password' => 'required',
        ]);

        $admin = new User();
        $admin->role_id = 1;
        $admin->name = $request['name'];
        $admin->email = $request['email'];
        $admin->password = bcrypt($request['password']);
        $admin->save();
        return redirect()->back()->with('success', 'New Admin Created');
    }
}
