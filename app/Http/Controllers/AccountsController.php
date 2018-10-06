<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccountsController extends Controller
{
    public function accounts()
    {
        $results = DB::select("select a.id as intaccountid, a.username as varusername, a.strusertype as strusertype, e.stremployeefname as stremployeefname, e.stremployeelname as stremployeelname from tblaccounts a, tblemployee e where e.intaccountid = a.id");
        return view('Admin/accounts',compact('results'));
    }

    public function profile()
    {
        return view('Admin/profile');
    }

    public function addusers()
    {

        //dd(request()->all());

        $accountId = DB::table('tblaccounts')
                    ->insertGetId([
                        'username' => request()->username,
                        'password' => Hash::make(request()->password),
                        'strUserType' => request()->usertype,
                        'intActive' => 1,
                        'remember_token' => null,
                    ]);

        $employeeId = DB::table('tblemployee')
                    ->insertGetId([
                        'strEmployeeFName' => request()->fname,
                        'strEmployeeMName' => request()->mname,
                        'strEmployeeLName' => request()->lname,
                        'strEmployeeSex' => request()->gender,
                        'dtmEmployeeBDay' => request()->dateofbirth,
                        'varEmployeeEMail' => request()->email,
                        'varEmployeeContactNo' => request()->contact,
                        'intEmployeeHouseNo' => request()->houseno,
                        'strEmployeeStreet' => request()->street,
                        'strEmployeeBrgy' => request()->brgy,
                        'strEmployeeCity' => request()->city,
                        'intAccountId' => $accountId,
                    ]);

        header('Refresh:0;/Admin/Accounts');
    }

}
//INSERT INTO `tblemployee`
//(`intEmployeeId`, `strEmployeeFName`, `strEmployeeMName`, `strEmployeeLName`, `strEmployeeSex`, `dtmEmployeeBDay`, `varEmployeeEMail`, `varEmployeeContactNo`, `intEmployeeHouseNo`, `strEmployeeStreet`, `strEmployeeBrgy`, `strEmployeeCity`, `strEmployeeZip`, `intAccountId`) 
//VALUES (01,'Dustin','L','Alpasar','Male','1999-09-06','dus@gmail.com','09123456789',69,'Caloocan Street','Brgy. Siti','City of Streets',1600,);