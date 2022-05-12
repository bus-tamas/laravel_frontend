<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $fillable = ['airline_id', 'name', 'number', 'price'];
    public function captain()
    {
        return $this->hasOne(Captain::class);
    }

    public function passengers()    
    {
        return $this->hasMany(Passenger::class);
    }

    public function airline()
    {
        return $this->belongsTo(Airline::class);
    }
}
