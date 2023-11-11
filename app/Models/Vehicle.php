<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model {
    use HasFactory;

    protected $guarded = ['id'];

    public function orders() {
        return $this->belongsToMany(Order::class, 'order_vechicles');
    }

    public function trucks() {
        return $this->hasMany(Truck::class);
    }

    public function cars() {
        return $this->hasMany(Car::class);
    }

    public function motobikes() {
        return $this->hasMany(Motobike::class);
    }
}
