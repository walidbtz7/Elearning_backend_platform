<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
        'id','text','question_id'
    ];
    protected $primaryKey = 'id';

    public function Question(){
        return $this->belongsTo(Question::class);
    }

}
