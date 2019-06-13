<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use DateTime;

class DashboardController extends Controller
{
    public function index()
    {
        $customers = DB::select('select * from customer');
        //DB::insert('insert into login (customer_id, status, login_at, logout_at, count) values (?, ?, ?, ?, ?)', [3, 0, '2018-09-01 08:11:24', '2018-09-01 10:11:24', 4]);
        //DB::insert('insert into authority (author, created_at, updated_at) values (?, ?, ?)', ['administrator', new DateTime(), new DateTime()]);
        return view('dashboard/index', ['customers' => $customers]);
    }
}
