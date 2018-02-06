<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gutschein extends Model
{
    protected $guarded = [
        'dhl', 'paket',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function campaign(){
        return $this->belongsTo(Campaign::class);
    }

    public function reward(){
        return $this->belongsTo(Reward::class);
    }

}
