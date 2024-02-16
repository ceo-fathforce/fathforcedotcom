<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Master\FaqRequest;
use App\Http\Resources\Master\FaqResource;
use App\Models\Master\Faq;
use App\Services\Master\FaqListService;
use App\Services\Master\FaqService;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(Request $request, FaqListService $service)
    {
        return $service->paginate($request);
    }

    public function store(FaqRequest $request, FaqService $service)
    {
        $faq = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('master.faq.faq')]),
            'faq' => FaqResource::make($faq),
        ]);
    }

    public function show(Faq $faq): FaqResource
    {

        return FaqResource::make($faq);
    }

    public function update(FaqRequest $request, Faq $faq, FaqService $service)
    {
        $service->update($request, $faq);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('master.faq.faq')]),
        ]);
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('master.faq.faq')]),
        ]);
    }


}
