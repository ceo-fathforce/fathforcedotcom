<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Master\PortfolioRequest;
use App\Http\Resources\Master\PortfolioResource;
use App\Models\Master\Portfolio;
use App\Services\Master\PortfolioListService;
use App\Services\Master\PortfolioService;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function preRequisite(Request $request, PortfolioService $service)
    {
        return response()->ok($service->preRequisite($request));
    }

    public function index(Request $request, PortfolioListService $service)
    {
        return $service->paginate($request);
    }

    public function store(PortfolioRequest $request, PortfolioService $service)
    {
        $portfolio = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('master.portfolio.portfolio')]),
            'portfolio' => PortfolioResource::make($portfolio),
        ]);
    }

    public function show(Portfolio $portfolio): PortfolioResource
    {
        $portfolio->load('media');

        return PortfolioResource::make($portfolio);
    }

    public function update(PortfolioRequest $request, Portfolio $portfolio, PortfolioService $service)
    {
        $service->update($request, $portfolio);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('master.portfolio.portfolio')]),
        ]);
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('master.portfolio.portfolio')]),
        ]);
    }

    public function download(Portfolio $portfolio, $uuid)
    {
        return $portfolio->downloadMedia($uuid);
    }
}
