<?php

namespace App\Http\Resources\Landing;

use App\Helpers\CalHelper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Resources\Json\JsonResource;

class PageCategoryResource extends JsonResource
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
            'is_createtable' => $this->isEditable() && Auth::user()->can('pagecategory:create'),
            'is_editable' => $this->isEditable() && Auth::user()->can('pagecategory:edit'),
            'is_deletable' => $this->isEditable() && Auth::user()->can('pagecategory:delete'),
            'is_readtable' => $this->isEditable() && Auth::user()->can('pagecategory:read'),
            'created_at' => CalHelper::toDateTime($this->created_at),
            'updated_at' => CalHelper::toDateTime($this->updated_at),
        ];
    }
}
