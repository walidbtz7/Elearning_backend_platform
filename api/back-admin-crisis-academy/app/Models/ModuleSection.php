<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleSection extends Model
{
    protected $fillable = [
        'id','numero','module_id','section_id'
    ];
    protected $primaryKey = 'id';
    Public function Section(){
        return $this->belongsTo(Section::class);
    }
    Public function Module(){
        return $this->belongsTo(Module::class);
    }
}
