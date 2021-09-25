<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;


class UsersController extends Controller
{
    public function displayUserName(){
        return 'User Aziz';
    }
    public function getIndex(){

        $data=[];
        $data['id']=30;
        $data['name']='Aziz';
        $data['phone']='1237633';
        return view("welcome",$data);
    }
    public function getObject(){
        $obj=new \stdclass();
        $obj->id=30;
        $obj->name='Aziz';
        return view("welcome",compact("obj"));

    }
}
