<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameSlotResume extends Model
{ 
    public function InfoSlot()
    {
        return $this->hasOne(InfoSlotResume::class,'id','info_game_id');
    }
}
