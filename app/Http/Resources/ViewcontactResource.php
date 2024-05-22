<?php

namespace App\Http\Resources;

use App\Helpers\CalHelper;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class ViewcontactResource extends JsonResource
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
            'first' => $this->first,
            'last' => $this->last,
            'email' => $this->email,
            'department' => $this->department,
            'message' => $this->message,
            'media_token' => $this->getMeta('media_token'),
            'media' => MediaResource::collection($this->whenLoaded('media')),
            'is_createtable' => $this->isEditable() && Auth::user()->can('viewcontact:create'),
            'is_editable' => $this->isEditable() && Auth::user()->can('viewcontact:edit'),
            'is_deletable' => $this->isEditable() && Auth::user()->can('viewcontact:delete'),
            'is_readtable' => $this->isEditable() && Auth::user()->can('viewcontact:read'),
            'created_at' => CalHelper::toDateTime($this->created_at),
            'updated_at' => CalHelper::toDateTime($this->updated_at),
        ];
    }
}
