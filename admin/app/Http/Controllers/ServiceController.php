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
        $result = json_decode(ServiceModel::orderBy('id','desc')->get());
        return $result;
    }

    public function ServiceDetailsEdit(Request $request)
    {

        $id = $request->input("id");
        $result = ServiceModel::where('id', '=', $id)->get();
        return $result;
    }




    public function ServicecDelete(Request $request)
    {

        $id = $request->input("id");
        $result = ServiceModel::where('id', '=', $id)->delete();
        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }

    public function ServicecUpdate(Request $request)
    {

        $id = $request->input("id");
        $name = $request->input("name");
        $des = $request->input("des");
        $img = $request->input("img");

        $result = ServiceModel::where('id', '=', $id)->update(['service_name' => $name, 'service_des' => $des, 'service_img' => $img]);

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }

    public function ServicecAdd(Request $request)
    {

        $name = $request->input("name");
        $des = $request->input("des");
        $img = $request->input("img");

        $result = ServiceModel::insert(['service_name' => $name, 'service_des' => $des, 'service_img' => $img]);

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }
}
