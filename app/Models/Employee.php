<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;
    //Permitir el uso de softdelete
    use SoftDeletes;
    //permitir la asignacion masiva
    protected $guarded = [];
}
