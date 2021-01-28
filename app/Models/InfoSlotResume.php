<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class InfoSlotResume extends Model
{
    public function slotResume()
    {
        return $this->belongsTo(GameSlotResume::class);
    }
}
