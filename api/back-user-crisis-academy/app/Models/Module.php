<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
     protected $appends = ['sections'];


    protected $fillable = [
        'id','title','image','new','niveau','category_id','trainer_id','scope'
    ];
    protected $primaryKey = 'id';


    public function Trainer()
    {
        return $this->belongsTo(Trainer::class);

    }
    public function path()
    {
        return $this->belongsTo(LearningPath::class);

    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function sections()
    {
        return $this->hasMany(ModuleSection::class,'module_id');
    }

    public function getSectionsAttribute()
    {

        return $this->sections()->get(['id','module_id','section_id']);

    }
}
