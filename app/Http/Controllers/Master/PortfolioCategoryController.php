<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Master\PortfolioCategoryRequest;
use App\Http\Resources\Master\PortfolioCategoryResource;
use App\Models\Master\PortfolioCategory;

use App\Services\Master\PortfolioCategoryListService;
use App\Services\Master\PortfolioCategoryService;
use Illuminate\Http\Request;

class PortfolioCategoryController extends Controller
{
    public function index(Request $request, PortfolioCategoryListService $service)
    {
        return $service->paginate($request);
    }

    public function store(PortfolioCategoryRequest $request, PortfolioCategoryService $service)
    {
        $portfoliocategory = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('master.portfoliocategory.portfoliocategory')]),
            'portfoliocategory' => PortfolioCategoryResource::make($portfoliocategory),
        ]);
    }

    public function show(PortfolioCategory $portfoliocategory): PortfolioCategoryResource
    {
        return PortfolioCategoryResource::make($portfoliocategory);
    }

    public function update(PortfolioCategoryRequest $request, PortfolioCategory $portfoliocategory, PortfolioCategoryService $service)
    {
        $service->update($request, $portfoliocategory);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('master.portfoliocategory.portfoliocategory')]),
        ]);
    }

    public function destroy(PortfolioCategory $portfoliocategory)
    {
        $portfoliocategory->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('master.portfoliocategory.portfoliocategory')]),
        ]);
    }

    public function download(PortfolioCategory $portfoliocategory, $uuid)
    {
        return $portfoliocategory->downloadMedia($uuid);
    }
}
