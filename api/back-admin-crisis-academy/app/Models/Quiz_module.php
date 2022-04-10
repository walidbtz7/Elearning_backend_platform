<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz_module extends Model
{
    protected $fillable = [
        'id','numero','module_id','quiz_id'
    ];
    protected $primaryKey = 'id';
}
