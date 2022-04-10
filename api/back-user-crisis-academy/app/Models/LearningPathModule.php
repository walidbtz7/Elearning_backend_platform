<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningPathModule extends Model
{
    protected $fillable = [
        'id','numero','path_id','module_id'
    ];
    protected $primaryKey = 'id';

    Public function Path(){
        return $this->belongsTo(LearningPath::class);
    }
    Public function Module(){
        return $this->belongsTo(Module::class);
    }

}


