<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoilTest extends Model
{
    use HasFactory;

    protected $fillable = ['soil_type', 'pH', 'nitrogen', 'phosphorus', 'potassium'];
}
