<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InfoGameResume extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);
       return [
           'id'=>$this->id, 
            'currentLevelPlay'=>$this->currentLevelPlay,
            'screenShoot'=>$this->screenShootPath,
            'gameDifficulty'=>$this->gameDificulty,
            'typeSaveSlot'=>$this->typeSaveSlot,
            'dateTimeCreation'=>$this->dateTimeCreation,
            'datetimeSaved'=>$this->datetimeSaved,
        
     
      
       ];
    }
}
