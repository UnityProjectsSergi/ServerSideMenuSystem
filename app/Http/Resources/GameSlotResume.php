<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GameSlotResume extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'folderDone'=>$this->folderDone,
            'FolderOfSlot'=>$this->FolderOfSlot,
            'FileSlot'=>$this->FileSlot,
            'dataInfoSlot'=>$this->InfoSlot,
        ];
    }
}
// fer crider