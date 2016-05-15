<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
/**
 * Created by PhpStorm.
 * User: 仁興
 * Date: 2016/5/13
 * Time: 下午 11:55
 */
class IndexController extends Controller
{
    public function login(){
        session(['admin' => 1]);
        return '登入';
    }
    
    public function Index(){        
        return view('welcome');
    }

    public function logout(){
        session(['admin' => null]);//設為空值即清除
        return redirect('/');//重新導到你的頁面
    }
}