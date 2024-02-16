<?php

namespace App\Services\Landing;

use App\Models\Landing\Page;
use App\Models\Landing\PageCategory;
use Illuminate\Http\Request;

class PageService
{
    public function preRequisite(): array
    {
        $list = PageCategory::get();
        $pagecategory = [];
        foreach ($list as $item => $value) {
            $pagecategory[] = ['value' => $value->id, 'label' => $value->title];
        }
        return compact('pagecategory');
    }
    
    public function create(Request $request): Page
    {
        $page = Page::forceCreate($this->formatParams($request));

        $page->addMedia($request);

        return $page;
    }

    private function formatParams(Request $request, ?Page $page = null): array
    {
        return [
            'name' => $request->name,
            'slug' => strtolower(str_replace(' ','-',$request->name)),
            'page_category_id' => $request->pagecategory,
            'description' => $request->description,
        ];
    }

    public function update(Request $request, Page $page): void
    {
        $page->forceFill($this->formatParams($request, $page))->save();

        $page->updateMedia($request);
    }

    public function deletable(Page $page): void
    {
    }
}
