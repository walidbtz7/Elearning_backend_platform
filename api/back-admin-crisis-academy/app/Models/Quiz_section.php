<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz_section extends Model
{
    protected $fillable = [
        'id','numero','section_id','quiz_id'
    ];
    protected $primaryKey = 'id';
}
