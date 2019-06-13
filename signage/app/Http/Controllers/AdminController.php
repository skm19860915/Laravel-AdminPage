<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    function index()
    {
        $users = DB::select('select users.id, users.name, users.email, users.password, authority.author
         from users join authority on users.level = authority.id');
        return view('admin/index', ['users' => $users]);
    }
}
