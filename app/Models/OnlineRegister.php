<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineRegister extends Model
{
    use HasFactory;
    protected $table = 'onlineregister';
    protected $fillable = ['name','fname','email','phone','address','city','State','zip','bname','gname','radio','filemanager','gridCheck'];
}
