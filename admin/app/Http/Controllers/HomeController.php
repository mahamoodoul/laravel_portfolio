<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ContactModel;
use App\CoursesModel;
use App\ProjectModel;
use App\ReviewModel;
use App\ServiceModel;
use App\VisitorTable;

class HomeController extends Controller
{

    function HomeIndex(){

        $TotalContact= ContactModel::count();
        $TotalCourse=CoursesModel::count();
        $TotalProject=ProjectModel::count();
        $TotalReview=ReviewModel::count();
        $TotalService=ServiceModel::count();
        $TotalVisitor=VisitorTable::count();

         return view('Home',[
             'TotalContact'=>$TotalContact,
             'TotalCourse'=>$TotalCourse,
             'TotalProject' =>$TotalProject,
             'TotalReview'=>$TotalReview,
             'TotalService'=>$TotalService,
             'TotalVisitor' =>$TotalVisitor
         ]);
     }
}
