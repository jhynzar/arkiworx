<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountsController extends Controller
{
    public function accounts()
    {
        $results = DB::select("select a.intaccountid as intaccountid, a.varusername as varusername, a.strusertype as strusertype, e.stremployeefname as stremployeefname, e.stremployeelname as stremployeelname from tblaccounts a, tblemployee e where e.intaccountid = a.intaccountid");
        return view('Admin/accounts',compact('results'));
    }

    public function profile()
    {
        return view('Admin/profile');
    }

    public function addusers()
    {
        $fn = Input::post('fname');
        $ln = Input::post('lname');
        $un = Input::post('uname');
        $pw = Input::post('password');
        $cno = Input::post('contact');
        $sex = Input::post('sex');
        $email = Input::post('email');
        $hno = Input::post('houseno');
        $sna = Input::post('streetna');
        $brgy = Input::post('brgy');
        $city = Input::post('city');
        $utype = Input::post('usertype');
        $insert1 = array($un,$pw,$utype);
        $insert2 = array($fn,$ln,$cno,$sex,$email,$hno,$sna,$brgy,$city);
        DB::insert("",$insert1);
        return view('Admin/accounts');
    }

}
//INSERT INTO `tblemployee`
//(`intEmployeeId`, `strEmployeeFName`, `strEmployeeMName`, `strEmployeeLName`, `strEmployeeSex`, `dtmEmployeeBDay`, `varEmployeeEMail`, `varEmployeeContactNo`, `intEmployeeHouseNo`, `strEmployeeStreet`, `strEmployeeBrgy`, `strEmployeeCity`, `strEmployeeZip`, `intAccountId`) 
//VALUES (01,'Dustin','L','Alpasar','Male','1999-09-06','dus@gmail.com','09123456789',69,'Caloocan Street','Brgy. Siti','City of Streets',1600,);