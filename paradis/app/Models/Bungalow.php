<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bungalow extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'description', 'image', 'prix'];
}
