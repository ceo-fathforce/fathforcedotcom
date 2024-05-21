<?php

namespace App\Http\Controllers\Customize;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customize\CompanytextRequest;
use App\Http\Resources\Customize\CompanytextResource;
use App\Models\Customize\Companytext;
use App\Services\Customize\CompanytextListService;
use App\Services\Customize\CompanytextService;
use Illuminate\Http\Request;

class CompanytextController extends Controller
{
    public function index(Request $request, CompanytextListService $service)
    {
        return $service->paginate($request);
    }

    public function store(CompanytextRequest $request, CompanytextService $service)
    {
        $companytext = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('customize.companytext.companytext')]),
            'companytext' => CompanytextResource::make($companytext),
        ]);
    }

    public function show(Companytext $companytext): CompanytextResource
    {

        return CompanytextResource::make($companytext);
    }

    public function update(CompanytextRequest $request, Companytext $companytext, CompanytextService $service)
    {
        $service->update($request, $companytext);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('customize.companytext.companytext')]),
        ]);
    }

    public function destroy(Companytext $companytext)
    {
        $companytext->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('customize.companytext.companytext')]),
        ]);
    }


}
