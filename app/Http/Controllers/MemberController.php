<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

class MemberController extends Controller
{
    //
    function show(){

        $data=Trip::all();

        return view('list',['name'=>$data]);
    }

    function addData(Request $req){
        $Trip=new Trip;
        $Trip->name=$req->name;
        $Trip->age=$req->age;
        $Trip->gender=$req->gender;
        $Trip->email=$req->email;
        $Trip->phone=$req->phone;
        $Trip->desc=$req->desc;
        $Trip->save();
        return redirect('add');
        
    }
}
