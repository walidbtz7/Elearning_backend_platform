<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable = [
        'id','title','duration','video_id','lab_id'
    ];
    protected $primaryKey = 'id';

    public function Video()
    {
        return $this->hasOne(Video::class);

    }
    public function Lab()
    {
        return $this->hasOne(Lab::class);
    }



}

