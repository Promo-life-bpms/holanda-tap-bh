<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    public $table = 'form';

    protected $fillable = [
        'route',
        'agency',
        'employee_number',
        'tag',
    ];
}
