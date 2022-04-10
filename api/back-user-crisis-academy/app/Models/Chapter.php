<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable = [
        'id','title','duration','video_id','lab_id','description'
    ];
    protected $primaryKey = 'id';

    public function video()
    {
        return $this->belongsTo(Video::class,'video_id');

    }
    public function lab()
    {
        return $this->hasOne(Lab::class);
    }



}

