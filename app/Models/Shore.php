<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shore extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'location', 'opening_date', 'closing_date', 'beach_umbrella', 'beach_bed' , 'has_volley_field'
        , 'has_soccer_field', 'daily_price'
    ];
}
