<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landing\PageRequest;
use App\Http\Resources\Landing\PageResource;
use App\Models\Landing\Page;
use App\Services\Landing\PageListService;
use App\Services\Landing\PageService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function preRequisite(Request $request, PageService $service)
    {
        return response()->ok($service->preRequisite($request));
    }

    public function index(Request $request, PageListService $service)
    {
        return $service->paginate($request);
    }

    public function store(PageRequest $request, PageService $service)
    {
        $page = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('landing.page.page')]),
            'page' => PageResource::make($page),
        ]);
    }

    public function show(Page $page): PageResource
    {
        $page->load('media');

        return PageResource::make($page);
    }

    public function update(PageRequest $request, Page $page, PageService $service)
    {
        $service->update($request, $page);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('landing.page.page')]),
        ]);
    }

    public function destroy(Page $page)
    {
        $page->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('landing.page.page')]),
        ]);
    }

    public function download(Page $page, $uuid)
    {
        return $page->downloadMedia($uuid);
    }
}
