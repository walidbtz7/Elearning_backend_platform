<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certifact extends Model
{
    protected $fillable = [
        'id','title','date'
    ];
    protected $primaryKey = 'id';
}
