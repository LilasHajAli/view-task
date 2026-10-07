<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        $name = 'lilas';
        $users = DB::table('users')->get ();
        return view('home' , compact('name' , 'users'));
    }
}
