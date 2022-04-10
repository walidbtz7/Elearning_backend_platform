<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section_chapter extends Model
{
    protected $fillable = [
        'id','numero','section_id','chapter_id'
    ];
    protected $primaryKey = 'id';
}
