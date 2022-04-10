<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizModule extends Model
{
    protected $fillable = [
        'id', 'numero', 'module_id', 'quiz_id'
    ];
    protected $primaryKey = 'id';

    public function Quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
    public function Module()
    {
        return $this->belongsTo(Module::class);
    }
}
