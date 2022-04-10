<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = [
        'id','title','big_image','new','niveau','trainer_id','scope','category'
    ];
    protected $primaryKey = 'id';


    public function Trainer()
    {
        return $this->belongsTo(Trainer::class);

    }

}
