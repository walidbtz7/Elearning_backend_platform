<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaitingPath extends Model
{
    protected $fillable = [
        'id','note','user_id','path_id'
    ];
    protected $primaryKey = 'id';
}

