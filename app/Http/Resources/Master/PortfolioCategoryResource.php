<?php

namespace App\Http\Resources\Master;

use App\Helpers\CalHelper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Resources\Json\JsonResource;

class PortfolioCategoryResource extends JsonResource
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
            'title' => $this->title,
            'is_createtable' => $this->isEditable() && Auth::user()->can('portfoliocategory:create'),
            'is_editable' => $this->isEditable() && Auth::user()->can('portfoliocategory:edit'),
            'is_deletable' => $this->isEditable() && Auth::user()->can('portfoliocategory:delete'),
            'is_readtable' => $this->isEditable() && Auth::user()->can('portfoliocategory:read'),
            'created_at' => CalHelper::toDateTime($this->created_at),
            'updated_at' => CalHelper::toDateTime($this->updated_at),
        ];
    }
}
