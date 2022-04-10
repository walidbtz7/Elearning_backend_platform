<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module_section extends Model
{
    protected $fillable = [
        'id','numero','module_id','section_id'
    ];
    protected $primaryKey = 'id';
}
