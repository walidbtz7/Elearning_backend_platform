<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [
        'id','description','min_point','question_id',
    ];
    protected $primaryKey = 'id';
    public function Question()
    {
        return $this->hasOne(Question::class);

    }
}
