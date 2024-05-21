<?php

namespace App\Http\Resources\Customize;

use App\Helpers\CalHelper;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class GeneraltextResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'uuid' => $this->uuid,
            'name' => $this->name,
            'is_createtable' => $this->isEditable() && Auth::user()->can('generaltext:create'),
            'is_editable' => $this->isEditable() && Auth::user()->can('generaltext:edit'),
            'is_deletable' => $this->isEditable() && Auth::user()->can('generaltext:delete'),
            'is_readtable' => $this->isEditable() && Auth::user()->can('generaltext:read'),
            'created_at' => CalHelper::toDateTime($this->created_at),
            'updated_at' => CalHelper::toDateTime($this->updated_at),
        ];
    }
}

