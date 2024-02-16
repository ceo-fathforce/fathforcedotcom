<?php

namespace App\Http\Resources\Master;

use App\Helpers\CalHelper;
use App\Http\Resources\MediaResource;
use App\Models\Master\GalleryCategory;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class GalleryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $gallerycategory = GalleryCategory::where('id', $this->gallery_category_id)->first();
        return [
            'uuid' => $this->uuid,
            'gallerycategory' => $gallerycategory->id,
            'gallerycategorytitle' => $gallerycategory->title,
            'name' => $this->name,
            'media_token' => $this->getMeta('media_token'),
            'media' => MediaResource::collection($this->whenLoaded('media')),
            'is_createtable' => $this->isEditable() && Auth::user()->can('gallery:create'),
            'is_editable' => $this->isEditable() && Auth::user()->can('gallery:edit'),
            'is_deletable' => $this->isEditable() && Auth::user()->can('gallery:delete'),
            'is_readtable' => $this->isEditable() && Auth::user()->can('gallery:read'),
            'created_at' => CalHelper::toDateTime($this->created_at),
            'updated_at' => CalHelper::toDateTime($this->updated_at),
        ];
    }
}
