<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizModule extends Model
{
    protected $fillable = [
        'id','numero','module_id','quiz_id'
    ];
    protected $primaryKey = 'id';
    Public function Quiz(){
        return $this->belongsTo(Quiz::class);
    }
    Public function Module(){
        return $this->belongsTo(Module::class);
    }
}
