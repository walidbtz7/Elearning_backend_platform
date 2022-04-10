<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSection extends Model
{
    protected $fillable = [
        'id','numero','user_id','section_id'
    ];
    protected $primaryKey = 'id';
    Public function User(){
        return $this->belongsTo(User::class);
    }
    Public function Section(){
        return $this->belongsTo(Section::class);
    }
}
