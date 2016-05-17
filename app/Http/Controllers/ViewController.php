<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ViewController extends Controller
{
    //
    public function index(){
        $data = [
            'score' => 60,
            'number' => 1,
            'article' =>[
                'news 1',
                'news 2',
                'news 4',
            ],
            'news' => array(),
        ];
        return view('my_laravel', compact('data'));
    }

    public function layouts(){
        return view('layouts');
    }

    public function env(){
        //app.php 裡的debug , 'debug' => env('APP_DEBUG', false), 參考了env裡的檔案, 如果env沒有設定則為false
        echo config('app.debug');
        //如.ENV裡沒有的參數也 , 可自行加入參數對應
        echo config('database.connections.mysql.prefix');
    }
    
}
