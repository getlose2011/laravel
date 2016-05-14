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
        return '登入';
    }
    
    public function Index(){
        return view('welcome');
    }
}