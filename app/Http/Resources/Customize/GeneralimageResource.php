<?php

namespace App\Http\Resources\Customize;

use App\Helpers\CalHelper;
use App\Http\Resources\MediaResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserSummaryResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class GeneralimageResource extends JsonResource
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
            'media_token' => $this->getMeta('media_token'),
            'media' => MediaResource::collection($this->whenLoaded('media')),
            'is_createtable' => $this->isEditable() && Auth::user()->can('generalimage:create'),
            'is_editable' => $this->isEditable() && Auth::user()->can('generalimage:edit'),
            'is_deletable' => $this->isEditable() && Auth::user()->can('generalimage:delete'),
            'is_readtable' => $this->isEditable() && Auth::user()->can('generalimage:read'),
            'created_at' => CalHelper::toDateTime($this->created_at),
            'updated_at' => CalHelper::toDateTime($this->updated_at),
        ];
    }
}
