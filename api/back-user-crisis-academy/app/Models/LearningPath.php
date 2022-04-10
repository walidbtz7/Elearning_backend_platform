<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningPath extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','title','description','niveau','logo','grained_points','is_premium'
    ];
    protected $primaryKey = 'id';

}
