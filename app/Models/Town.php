<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'address',
        'size',
        'phoneNumber',
        'youTubeLink',
        'picture',
        'presentation',
    ];
}
