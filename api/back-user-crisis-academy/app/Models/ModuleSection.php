<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleSection extends Model
{
    protected $with = ['Section'];

    protected $fillable = [
        'id', 'numero', 'module_id', 'section_id'
    ];
    protected $primaryKey = 'id';

    public function Section()
    {
        return $this->belongsTo(Section::class);
    }

    public function Module()
    {
        return $this->belongsTo(Module::class);
    }

}
