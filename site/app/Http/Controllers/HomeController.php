<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorTable;
use App\ServiceModel;
use App\CoursesModel;
use App\ProjectModel;
use App\ContactModel;

class HomeController extends Controller
{
    //
    public function HomeIndex()
    {
        $UserIP = $_SERVER['REMOTE_ADDR'];
        if ($UserIP)
            date_default_timezone_set("Asia/Dhaka");
        $timeDate = date("Y-m-d h:i:sa");
        VisitorTable::insert(['ip_address' => $UserIP, 'visit_time' => $timeDate]);
        $serviceData = json_decode(ServiceModel::orderBy('id', 'desc')->limit(8)->get());

        $coursesData = json_decode(CoursesModel::orderBy('id', 'desc')->limit(6)->get());

        $projectData = json_decode(ProjectModel::orderBy('id', 'desc')->limit(4)->get());


        return view('Home', ['serviceData' => $serviceData, 'coursesData' => $coursesData, 'projectData' => $projectData]);
    }

    public function ContactSend(Request $request)
    {



        $name = $request->input('namea');
        $mobile = $request->input('mobile');
        $email = $request->input('email');
        $msg = $request->input('msg');



        $result = ContactModel::insert([
            'name' => $name,
            'mobile' => $mobile,
            'email' => $email,
            'msg' => $msg
        ]);

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }
}
