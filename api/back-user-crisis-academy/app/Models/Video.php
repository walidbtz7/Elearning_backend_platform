<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'id','url','duration','is_trailler'
    ];
    protected $primaryKey = 'id';
}
