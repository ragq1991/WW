<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'priceRUB',
        'priceUSD',
        'defaultCurrency',
        'countFloor',
        'countBedroom',
        'size',
        'houseType_id',
        'town_id',
    ];
}
