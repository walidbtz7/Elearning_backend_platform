<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserChapter extends Model
{
    protected $fillable = [
        'id','numero','user_id','chapter_id'
    ];
    protected $primaryKey = 'id';

    Public function User(){
        return $this->belongsTo(User::class);
    }
    Public function Chapter(){
        return $this->belongsTo(Chapter::class);
    }
}
