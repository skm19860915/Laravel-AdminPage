<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function index()
    {
        $customers = \DB::select('select * from customer');
        return view('customer/index', ['customers' => $customers]);
    }

    public function save(Request $request) 
    {
        $status = $request->all();
        $id = $request->id;
        $permission = $request->status;
        $success = \DB::table('customer')->where(['id' => $id])->update(['permission' => $permission]);
        return response()->json(['success' => $success]);
    }
}
