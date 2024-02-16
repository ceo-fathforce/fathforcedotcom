<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landing\PageCategoryRequest;
use App\Http\Resources\Landing\PageCategoryResource;
use App\Models\Landing\PageCategory;

use App\Services\Landing\PageCategoryListService;
use App\Services\Landing\PageCategoryService;
use Illuminate\Http\Request;

class PageCategoryController extends Controller
{
    public function index(Request $request, PageCategoryListService $service)
    {
        return $service->paginate($request);
    }

    public function store(PageCategoryRequest $request, PageCategoryService $service)
    {
        $pagecategory = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('landing.pagecategory.pagecategory')]),
            'pagecategory' => PageCategoryResource::make($pagecategory),
        ]);
    }

    public function show(PageCategory $pagecategory): PageCategoryResource
    {
        return PageCategoryResource::make($pagecategory);
    }

    public function update(PageCategoryRequest $request, PageCategory $pagecategory, PageCategoryService $service)
    {
        $service->update($request, $pagecategory);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('landing.pagecategory.pagecategory')]),
        ]);
    }

    public function destroy(PageCategory $pagecategory)
    {
        $pagecategory->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('landing.pagecategory.pagecategory')]),
        ]);
    }

    public function download(PageCategory $pagecategory, $uuid)
    {
        return $pagecategory->downloadMedia($uuid);
    }
}
