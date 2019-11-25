<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    //
    protected $fillable=[
        'star','user_id','hotel_id'
    ];
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
