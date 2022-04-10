<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionChapter extends Model
{
    protected $with = ['Chapter'];

    protected $fillable = [
        'id','numero','section_id','chapter_id'
    ];
    protected $primaryKey = 'id';
    Public function Section(){
        return $this->belongsTo(Section::class);
    }
    Public function Chapter(){
        return $this->belongsTo(Chapter::class);
    }

}
