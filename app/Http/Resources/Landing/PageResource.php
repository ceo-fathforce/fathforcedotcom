<?php

namespace App\Http\Resources\Landing;

use App\Helpers\CalHelper;
use App\Http\Resources\MediaResource;
use App\Models\Landing\PageCategory;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class PageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $pagecategory = PageCategory::where('id', $this->page_category_id)->first();
        return [
            'uuid' => $this->uuid,
            'pagecategory' => $pagecategory->id,
            'pagecategorytitle' => $pagecategory->title,
            'name' => $this->name,
            'description' => $this->description,
            'media_token' => $this->getMeta('media_token'),
            'media' => MediaResource::collection($this->whenLoaded('media')),
            'is_createtable' => $this->isEditable() && Auth::user()->can('page:create'),
            'is_editable' => $this->isEditable() && Auth::user()->can('page:edit'),
            'is_deletable' => $this->isEditable() && Auth::user()->can('page:delete'),
            'is_readtable' => $this->isEditable() && Auth::user()->can('page:read'),
            'created_at' => CalHelper::toDateTime($this->created_at),
            'updated_at' => CalHelper::toDateTime($this->updated_at),
        ];
    }
}
