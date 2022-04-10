<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPath extends Model
{
    protected $fillable = [
        'id','numero','user_id','path_id'
    ];
    protected $primaryKey = 'id';
    Public function User(){
        return $this->belongsTo(User::class);
    }
    Public function Path(){
        return $this->belongsTo(LearningPath::class);
    }
}
