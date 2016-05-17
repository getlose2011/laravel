<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Model\User;
use Illuminate\Support\Facades\DB;//連資料庫要載入

class IndexController extends Controller
{
    //
    public function index(){
        //$users = DB::table('user')->where('id','>',1)->get();

        //使用自己建的Model
        //方法1.
        // $users = User::Where('id',1)->get();
        //dd($users);

        //方法2.
        $users1 = User::find(1);//如果主鍵不是id的話,就要自己設定主鍵名稱
        $users1->name = 'test';//設值
        $users1->update();//更新
        dd($users1);
    }
}
