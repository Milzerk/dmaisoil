<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $Vehicle = 'vehicles';

    protected $fillable = [
        'client_id', 'license', 'brand', 'model'
    ];

    public function Client() {
        return $this->belongsTo(Client::class, 'client', 'id');
    }
}
