<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\SlotModel;
use App\Models\GameObject;
use App\Http\Resources\GameObjectResource;
class SlotResource extends JsonResource
{
    function __construct(SlotModel $model)
    {
        parent::__construct($model);
    }
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'health'=>$this->health,
            'ObjectsToSaveInSlot'=>$this->gameObjects,
            "NumObj"=>$this->gameObjects->count(),
           // 'Slots1'=>GameObjectResource::collection(GameObject::all()->where("slot_id",$this->id)),
           //'NumObj'=>count(GameObjectResource::collection(GameObject::all()->where("slot_id",$this->id))),
        ];
      
    }
}
