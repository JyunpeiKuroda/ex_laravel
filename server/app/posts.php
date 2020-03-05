<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    protected $table = 'post'; // ここのテーブルの名前を間違えないように！
    // protected $fillable = ['body'];
}
