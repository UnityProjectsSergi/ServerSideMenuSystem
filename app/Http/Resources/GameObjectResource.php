<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\GameObject;

class GameObjectResource extends JsonResource
{
    function __construct(GameObject $model)
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
            'namePrefab' => $this->namePrefab,
            'pathPrefab' => $this->pathPrefab,
            'position'=>str_replace("\"","'",$this->positionJson),
            'rotation'=>str_replace("\"","'",$this->rotationJson),
            'scale'=>str_replace("\"","'",$this->scaleJson),
            'isActive'=>$this->isActive,
            'layerMask'=>$this->layerMask,
            'tag'=>$this->tag,
            'isStatic'=>$this->isStatic,
            'slot_id'=>$this->slot_id,
            'staticFlag'=>$this->staticFlag
        ];
    }
}
