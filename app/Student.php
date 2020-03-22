<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'age',
        'company',
        'role',
        'gender',
        'created_at',
        'updated_at'
    ];
}
