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
    
}
