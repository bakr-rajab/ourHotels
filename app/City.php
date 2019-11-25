<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable=[
        'code'
    ];
    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }
}
