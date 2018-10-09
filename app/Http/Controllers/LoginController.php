<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; //for forms
use Illuminate\Support\Facades\DB;     //for db
//use App\Accounts; //for db models
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function forgotPass()
    {
        return view('forgot-password');
    }

    public function login()
    {
        $credentials = [
            'username' => request()->UserN,
            'password' => request()->PassW,
            'intActive' => 1,
        ];

        if(Auth::attempt($credentials,true)){
            if(Auth::user()->strUserType == 'Admin'){
                return redirect('Admin/Home');
            }else if(Auth::user()->strUserType == 'Engineer'){
                return redirect('Engineer/Home');
            }else{
                return Redirect::back()->withErrors(['Unknown User Type']);
            }
        }else{
            return Redirect::back()->withErrors(['Login Failed. Check Username and/or Password.']);
        }


        /*
        $usern = Input::post('UserN');
        $passw = Input::post('PassW');
        $userno=strlen($usern);
        $passno=strlen($passw);
        $pattern = '/[^[:alnum:]]/';
        $allowed1 = preg_match_all($pattern,$usern);
        $allowed2 = preg_match_all($pattern,$passw);
        if($allowed1>0 or $allowed2>0){
            //invalid char
        }
        else if($userno<6 or $userno >12 or $passno<8 or $passno>16){
            return 'Username must be > 6 & < 12, Password must be > 8 & < 16';
        }
        else{
            //db connection
            $usern=array($usern);
            $results = DB::select("SELECT * FROM tblAccounts WHERE varUserName = ? ", $usern);
            $account = count($results);
            if($account===1){
                foreach ($results as $result) {
                    $pass = $result->varPassWord;
                    $type = $result->strUserType;
                }
                if($passw===$pass){
                    if($type==='Admin'){
                        //welcome page for admin
                        header("Refresh:0;Admin/Home");
                    }
                    else if($type==='Engineer'){
                        //welcome page for engi
                        header("Refresh:0;Engineer/Home");
                    }
                    else if($type==='Client'){
                        //welcome page for client
                        return 'Client';
                    }
                    else{
                        //unknown error
                        return "error:2";
                    }
                }
                else{
                    //wrong pass
                    return "wrong pass";
                }
            }
            else if($account===0){
                //acc doesnt exist
                return "account does not exist";
            }
            else{
                //error catcher doi
                return "error:1";
            }
        }
        */
    }

    /*public function ()
    {
        //
    }*/


}
