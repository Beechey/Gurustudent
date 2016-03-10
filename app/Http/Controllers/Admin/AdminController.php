<?php

namespace Gurustudent\Http\Controllers\Admin;

use Gurustudent\Http\Controllers\Controller;
use Gurustudent\Models\User;
use Gurustudent\Models\Role;
use Gurustudent\Models\Permission;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function getAdminCP() {
        if (Auth::user()->hasRole('owner') || Auth::user()->hasRole('admin')) {
            return view('admin.index');
        } 
        else {
            return redirect()->back()->with('danger', 'Sorry, you do not have that permission');
        }
    }

    public function getUsers()
    {
        $users = User::where('username','LIKE','%'.$query.'%')->get();

        return view('admin.users')->with('users', $users);
    }
}