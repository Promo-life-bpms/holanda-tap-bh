<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tap extends Model
{
    use HasFactory;
    public $table = 'tap';

    protected $fillable = [
        'ip',
        'device',
        'location',
        'operative_system',
        'tag',
    ];
}
