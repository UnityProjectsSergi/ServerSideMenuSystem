<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class SlotCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'health'=>$this->health,
            'ObjectsToSaveInSlot'=>GameObjectResource::collection(GameObject::all()->where("slot_id",$this->id)),
            'NumObj'=>count(GameObjectResource::collection(GameObject::all()->where("slot_id",$this->id))),
        ];
    }
}
