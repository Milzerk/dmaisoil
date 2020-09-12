<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $Client = 'clients';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone'
    ];

    public function Vehicles()
    {
        return $this->hasMany(Vehicle::class, 'client', 'id');
    }
}
