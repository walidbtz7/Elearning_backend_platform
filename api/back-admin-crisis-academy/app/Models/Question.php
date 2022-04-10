<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'id','title','hint','option_id','points','quiz_id'
    ];
    protected $primaryKey = 'id';
        public function Option()
    {
        return $this->hasOne(Option::class);
    }
    public function Quiz(){
        return $this->belongsTo(Quiz::class);
    }
}

