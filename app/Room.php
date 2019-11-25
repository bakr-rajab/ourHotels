<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $casts = [
        'activities' => 'array'
    ];
    protected $fillable=[
      'hotel_id','from','to','far','max_adults','activities'
    ];
    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }

}
