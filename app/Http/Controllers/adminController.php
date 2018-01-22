<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class adminController extends Controller
{
    public function index() {
      $users = User::all();

        return view('welcome', compact('users'));
    }


    public function details(User $user) {


        return view('admin.users', compact('user'));
    }

    // public function details($id) {
    //   $user = User::find($id);
    //
    //   return $user;
    //
    //     return view('admin.users', compact('user'));
    // }
}