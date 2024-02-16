<?php

namespace App\Services\Landing;

use App\Models\Landing\PageCategory;
use Illuminate\Http\Request;

class PageCategoryService
{
    public function create(Request $request): PageCategory
    {
        $pagecategory = PageCategory::forceCreate($this->formatParams($request));

        return $pagecategory;
    }

    private function formatParams(Request $request, ?PageCategory $pagecategory = null): array
    {
        return [
            'title' => $request->title,
            'slug' => strtolower(str_replace(' ','-',$request->title)),
        ];
    }

    public function update(Request $request, PageCategory $pagecategory): void
    {
        $pagecategory->forceFill($this->formatParams($request, $pagecategory))->save();

    }

    public function deletable(PageCategory $pagecategory): void
    {
    }
}
