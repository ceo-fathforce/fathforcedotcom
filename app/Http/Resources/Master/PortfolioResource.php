<?php

namespace App\Http\Resources\Master;

use App\Helpers\CalHelper;
use App\Http\Resources\MediaResource;
use App\Models\Master\PortfolioCategory;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class PortfolioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $portfoliocategory = PortfolioCategory::where('id', $this->portfolio_category_id)->first();
        return [
            'uuid' => $this->uuid,
            'portfoliocategory' => $portfoliocategory->id,
            'portfoliocategorytitle' => $portfoliocategory->title,
            'name' => $this->name,
            'description' => $this->description,
            'url' => $this->url,
            'media_token' => $this->getMeta('media_token'),
            'media' => MediaResource::collection($this->whenLoaded('media')),
            'is_createtable' => $this->isEditable() && Auth::user()->can('portfolio:create'),
            'is_editable' => $this->isEditable() && Auth::user()->can('portfolio:edit'),
            'is_deletable' => $this->isEditable() && Auth::user()->can('portfolio:delete'),
            'is_readtable' => $this->isEditable() && Auth::user()->can('portfolio:read'),
            'created_at' => CalHelper::toDateTime($this->created_at),
            'updated_at' => CalHelper::toDateTime($this->updated_at),
        ];
    }
}
