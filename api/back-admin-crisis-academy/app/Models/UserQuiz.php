<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserQuiz extends Model
{
    protected $fillable = [
        'id','numero','user_id','quiz_id'
    ];
    protected $primaryKey = 'id';
    Public function User(){
        return $this->belongsTo(User::class);
    }
    Public function Quiz(){
        return $this->belongsTo(Quiz::class);
    }
}
