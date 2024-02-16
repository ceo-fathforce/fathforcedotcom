<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Master\PartnerCompanyRequest;
use App\Http\Resources\Master\PartnerCompanyResource;
use App\Models\Master\PartnerCompany;
use App\Services\Master\PartnerCompanyListService;
use App\Services\Master\PartnerCompanyService;
use Illuminate\Http\Request;

class PartnerCompanyController extends Controller
{
    public function index(Request $request, PartnerCompanyListService $service)
    {
        return $service->paginate($request);
    }

    public function store(PartnerCompanyRequest $request, PartnerCompanyService $service)
    {
        $partnercompany = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('master.partnercompany.partnercompany')]),
            'partnercompany' => PartnerCompanyResource::make($partnercompany),
        ]);
    }

    public function show(PartnerCompany $partnercompany): PartnerCompanyResource
    {
        $partnercompany->load('media');

        return PartnerCompanyResource::make($partnercompany);
    }

    public function update(PartnerCompanyRequest $request, PartnerCompany $partnercompany, PartnerCompanyService $service)
    {
        $service->update($request, $partnercompany);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('master.partnercompany.partnercompany')]),
        ]);
    }

    public function destroy(PartnerCompany $partnercompany)
    {
        $partnercompany->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('master.partnercompany.partnercompany')]),
        ]);
    }

    public function download(PartnerCompany $partnercompany, $uuid)
    {
        return $partnercompany->downloadMedia($uuid);
    }
}
