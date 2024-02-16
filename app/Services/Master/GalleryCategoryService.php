<?php

namespace App\Services\Master;

use App\Models\Master\GalleryCategory;
use Illuminate\Http\Request;

class GalleryCategoryService
{
    public function create(Request $request): GalleryCategory
    {
        $gallerycategory = GalleryCategory::forceCreate($this->formatParams($request));

        return $gallerycategory;
    }

    private function formatParams(Request $request, ?GalleryCategory $gallerycategory = null): array
    {
        return [
            'title' => $request->title,
            'slug' => strtolower(str_replace(' ','-',$request->title)),
        ];
    }

    public function update(Request $request, GalleryCategory $gallerycategory): void
    {
        $gallerycategory->forceFill($this->formatParams($request, $gallerycategory))->save();

    }

    public function deletable(GalleryCategory $gallerycategory): void
    {
    }
}
