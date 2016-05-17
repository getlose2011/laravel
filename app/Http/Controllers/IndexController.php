<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;//連資料庫要載入

class IndexController extends Controller
{
    //
    public function index(){
        $users = DB::table('user')->where('id','>',1)->get();
        dd($users);
        return route('welcome');
    }
}
