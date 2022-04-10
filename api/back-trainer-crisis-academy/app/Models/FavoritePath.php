<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoritePath extends Model
{
    protected $fillable = [
        'id','user_id','path_id'
    ];
    protected $primaryKey = 'id';}
