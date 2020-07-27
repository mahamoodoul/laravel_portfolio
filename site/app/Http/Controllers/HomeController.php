<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorTable;
class HomeController extends Controller
{
    //
    public function HomeIndex(){
        $UserIP=$_SERVER['REMOTE_ADDR'];
        if($UserIP)
        date_default_timezone_set("Asia/Dhaka");
        $timeDate= date("Y-m-d h:i:sa");
        VisitorTable::insert(['ip_address'=>$UserIP,'visit_time'=>$timeDate]);
        return view('Home');
    }
}
