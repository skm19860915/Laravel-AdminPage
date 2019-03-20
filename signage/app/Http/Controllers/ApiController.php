<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    // register of customer
    function register(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $record = \DB::table('customer')->where(['email' => $email])->first();
        if($record == null){
            $status = $this->_insertRecordToCustomer($name, $email, $password);
            return response()->json(['register' => $status]);
        }
        return response()->json(['register' => -1]); // exist the same email
    }

    // login of customer
    function login(Request $request)
    {
        $record = \DB::table('customer')->where(['email' => $request->email])->first();
        if($record == null){
            return response()->json(['login' => -2]); // no register
        }
        if($request->password == $record->password){
            if($record->permission == 1){
                $status = $this->_updateRecordOfLogin($record->id);
                return response()->json(['login' => $status]); // login in successfully
            }
            return response()->json(['login' => 0]); // no have permission
        }
        return response()->json(['login' => -1]); // have wrong password
    }

    private function _insertRecordToCustomer($name, $email, $password)
    {
        try{
            $success = \DB::table('customer')->insert(['picture' => 'a.png', 'name' => $name, 'email' => $email, 'password' => $password, 
            'registered_at' => date('Y-m-d H:i:s'), 'permission' => 0]);
            if($success == true){
                return 1; // register email in successfully
            }
        }
        catch(Illuminate\Database\QueryException $e){
            return 0; // fail to register email
        }
        catch(\Exception $e){
            return 0; // fail to register email
        }
    }

    private function _updateRecordOfLogin($id)
    {
        $record = \DB::table('login')->where(['customer_id' => $id])->first();
        try{
            if($record == null){
                $success = \DB::table('login')->insert(['customer_id' => $id, 'status' => 1, 'login_at' => date('Y-m-d H:i:s'), 'count' => 1]);
                if($success == true){
                    return 1; // insert success
                }
            }
            $result = \DB::table('login')->where(['customer_id' => $id])->update(['status' => 1, 'login_at' => date('Y-m-d H:i:s'),
            'count' => $record->count + 1]);
            return $result; // if success, 1
        }
        catch(Illuminate\Database\QueryException $e){
            return -3; // fail to update or insert
        }
        catch(\Exception $e){
            return -3; // fail to update or insert
        }
    }
}
