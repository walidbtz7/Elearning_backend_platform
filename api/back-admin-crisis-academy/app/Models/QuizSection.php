<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizSection extends Model
{
    protected $fillable = [
        'id','numero','section_id','quiz_id'
    ];
    protected $primaryKey = 'id';
    Public function Quiz(){
        return $this->belongsTo(Quiz::class);
    }
    Public function Section(){
        return $this->belongsTo(Section::class);
    }
}
