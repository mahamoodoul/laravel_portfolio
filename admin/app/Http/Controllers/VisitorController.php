<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorTable;

class VisitorController extends Controller
{
    //
    public function VisitorIndex()
    {

        $visitorData = json_decode(VisitorTable::all(), true);
        return view("Visitor", ['visitorData' => $visitorData]);
    }
}
