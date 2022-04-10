<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteModule extends Model
{
    protected $fillable = [
        'id','text','module_id','user_id'
    ];
    protected $primaryKey = 'id';}
