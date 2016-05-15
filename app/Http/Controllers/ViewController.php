<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ViewController extends Controller
{
    //
    public function index(){
        //如果只有一個參數
        //$name = "網站";
        //return view('my_laravel')->with("name",$name);//分配view

//        //如果很多個參數
//        $data = [
//            'name' => 'web',
//            'age' => 12
//        ];
//        return view('my_laravel', $data);//分配view
        //如果有其它不一樣的參數
//        $data = [
//            'name' => 'web',
//            'age' => 12
//       ];
        $name = '<script>alert(1)</script>';
       return view('my_laravel', compact('name'));//分配view
    }
}
