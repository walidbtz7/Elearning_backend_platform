<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    protected $fillable = [
        'id','attachement','machine_ip'
    ];
    protected $primaryKey = 'id';
}
