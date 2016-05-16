<?php
/**
 * Created by PhpStorm.
 * User: 仁興
 * Date: 2016/5/14
 * Time: 下午 11:47
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


class ArticleController extends Controller
{
    public function index(){
        return view('article');
    }
}