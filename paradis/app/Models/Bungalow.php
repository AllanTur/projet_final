<?php

namespace App\Models;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bungalow extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'description', 'image', 'prix'];

    // public function users()
    // {
    //     return $this->belongsTo(Reservation::class);
    // }
}
