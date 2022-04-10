<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingModule extends Model
{
    protected $fillable = [
        'id','note','user_id','module_id'
    ];
    protected $primaryKey = 'id';
}
