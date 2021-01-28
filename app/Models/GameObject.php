<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SlotModel;
class GameObject extends Model
{
    protected $table="game_objects";
    public function slot()
    {
        return $this->belongsTo(SlotModel::class);
    }
}
