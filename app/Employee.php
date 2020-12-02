<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Employee extends Model
{
    public $table = 'employees';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'email',
        'phone',
        'salary',
        'department',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
