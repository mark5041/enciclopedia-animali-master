<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'name',
        'description',
        "photo",
        'specie_id'
    ];

    /**
     * Relationship with specie 
     *
     * @return void
     */
    public function specie()
    {
        return $this->belongsTo('App\Model\Specie');
    }
}
