<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CoursesModel;

class CoursesController extends Controller
{
    public function CourseIndex()
    {
        return view("Courses");
    }
    public function CoursesData()
    {
        $result = json_decode(CoursesModel::all());
        return $result;
    }
}
