<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'user';//預設會自動在table name 後面加上s,所以可自己設定table name
    // protected $primaryKey = 'user_id' 如果主鍵不是id的話,就要自己設定主鍵名稱

    //如果使用update() or save(),方法,預設會打開時間記錄,我們可以關掉或在資料庫加上updated_at或created_at這個欄位
    public $timestamps = false;
}
