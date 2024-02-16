<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Master\TermRequest;
use App\Http\Resources\Master\TermResource;
use App\Models\Master\Term;
use App\Services\Master\TermListService;
use App\Services\Master\TermService;
use Illuminate\Http\Request;

class TermController extends Controller
{
    public function index(Request $request, TermListService $service)
    {
        return $service->paginate($request);
    }

    public function store(TermRequest $request, TermService $service)
    {
        $term = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('master.term.term')]),
            'term' => TermResource::make($term),
        ]);
    }

    public function show(Term $term): TermResource
    {

        return TermResource::make($term);
    }

    public function update(TermRequest $request, Term $term, TermService $service)
    {
        $service->update($request, $term);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('master.term.term')]),
        ]);
    }

    public function destroy(Term $term)
    {
        $term->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('master.term.term')]),
        ]);
    }

}
