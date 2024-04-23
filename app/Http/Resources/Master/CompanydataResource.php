<?php

namespace App\Http\Resources\Master;

use App\Helpers\CalHelper;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\MediaResource;

class CompanydataResource extends JsonResource
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
            'completedprojects' => $this->completedprojects,
            'totalproducts' => $this->totalproducts,
            'satisfiedcostumers' => $this->satisfiedcostumers,
            'employees' => $this->employees,
            'media_token' => $this->getMeta('media_token'),
            'media' => MediaResource::collection($this->whenLoaded('media')),
            'is_createtable' => $this->isEditable() && Auth::user()->can('companydata:create'),
            'is_editable' => $this->isEditable() && Auth::user()->can('companydata:edit'),
            'is_deletable' => $this->isEditable() && Auth::user()->can('companydata:delete'),
            'is_readtable' => $this->isEditable() && Auth::user()->can('companydata:read'),
            'created_at' => CalHelper::toDateTime($this->created_at),
            'updated_at' => CalHelper::toDateTime($this->updated_at),
        ];
    }
}
