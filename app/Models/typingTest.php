<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typingTest extends Model
{
    use HasFactory;
    protected $table = 'typingtest';
    protected $fillable =['user_id','wpm','mistake','cpm','status','accuracy'];
}