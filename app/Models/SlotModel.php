<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\GameObject;
class SlotModel extends Model
{
   
   protected $table="slots";
    public function gameObjects()
    {
        return $this->hasMany(GameObject::class,'slot_id','id');
    }
}
