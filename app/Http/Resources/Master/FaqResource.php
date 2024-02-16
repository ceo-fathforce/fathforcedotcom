<?php

namespace App\Http\Resources\Master;

use App\Helpers\CalHelper;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class FaqResource extends JsonResource
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
            'description' => $this->description,
            'is_createtable' => $this->isEditable() && Auth::user()->can('faq:create'),
            'is_editable' => $this->isEditable() && Auth::user()->can('faq:edit'),
            'is_deletable' => $this->isEditable() && Auth::user()->can('faq:delete'),
            'is_readtable' => $this->isEditable() && Auth::user()->can('faq:read'),
            'created_at' => CalHelper::toDateTime($this->created_at),
            'updated_at' => CalHelper::toDateTime($this->updated_at),
        ];
    }
}

