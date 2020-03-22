<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'posts'; // ここのテーブルの名前を間違えないように！
    protected $fillable = ['body'];
}
