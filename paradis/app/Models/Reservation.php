<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'bungalow_id', 'debut', 'fin'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
        // hasOne
    }

    public function bungalows()
    {
        return $this->belongsTo(Bungalow::class, 'bungalow_id');
    }
}
