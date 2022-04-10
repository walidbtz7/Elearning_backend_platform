<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModule extends Model
{
    protected $fillable = [
        'id','numero','user_id','module_id'
    ];
    protected $primaryKey = 'id';
    Public function User(){
        return $this->belongsTo(User::class);
    }
    Public function Module(){
        return $this->belongsTo(Module::class);
    }
}
