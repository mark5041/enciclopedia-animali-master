<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Specie extends Model
{
    protected $fillable = [
        'name'
    ];

    /**
     * Relationship with animals 
     *
     * @return void
     */
    public function animals()
    {
        return $this->hasMany('App\Model\Animal');
    }
}
