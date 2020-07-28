<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceModel;

class ServiceController extends Controller
{
    public function ServiceIndex()
    {
        return view("Services");
    }

    public function ServicecData()
    {
        $result = json_decode(ServiceModel::all());
        return $result;
    }

    public function ServicecDelete(Request $request)
    {

        $id = $request->input("id");
        $result = ServiceModel::where('id', '=', $id)->delete();
        if($result== true){
            return 1;
        }else{
            return 0;
        }
    }
}
