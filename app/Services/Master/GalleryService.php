<?php

namespace App\Services\Master;

use App\Models\Master\Gallery;
use App\Models\Master\GalleryCategory;
use Illuminate\Http\Request;

class GalleryService
{
    public function preRequisite(): array
    {
        $list = GalleryCategory::get();
        $gallerycategory = [];
        foreach ($list as $item => $value) {
            $gallerycategory[] = ['value' => $value->id, 'label' => $value->title];
        }
        return compact('gallerycategory');
    }
    
    public function create(Request $request): Gallery
    {
        $gallery = Gallery::forceCreate($this->formatParams($request));

        $gallery->addMedia($request);

        return $gallery;
    }

    private function formatParams(Request $request, ?Gallery $gallery = null): array
    {
        return [
            'name' => $request->name,
            'slug' => strtolower(str_replace(' ','-',$request->name)),
            'gallery_category_id' => $request->gallerycategory,
        ];
    }

    public function update(Request $request, Gallery $gallery): void
    {
        $gallery->forceFill($this->formatParams($request, $gallery))->save();

        $gallery->updateMedia($request);
    }

    public function deletable(Gallery $gallery): void
    {
    }
}
