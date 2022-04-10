<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $appends = ['chapters'];

    protected $fillable = [
        'id','title','description'
    ];
    protected $primaryKey = 'id';

    public function chapters()
    {
        return $this->hasMany(SectionChapter::class,'section_id');
    }

    public function getChaptersAttribute()
    {

        return $this->chapters()->get(['id','section_id','chapter_id']);

    }



}
