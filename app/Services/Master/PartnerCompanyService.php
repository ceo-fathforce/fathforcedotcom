<?php

namespace App\Services\Master;

use App\Models\Master\PartnerCompany;
use Illuminate\Http\Request;

class PartnerCompanyService
{
    public function create(Request $request): PartnerCompany
    {
        $partnercompany = PartnerCompany::forceCreate($this->formatParams($request));

        $partnercompany->addMedia($request);

        return $partnercompany;
    }

    private function formatParams(Request $request, ?PartnerCompany $partnercompany = null): array
    {
        return [
            'name' => $request->name,
            'slug' => strtolower(str_replace(' ', '-', $request->name)),
            'description' => $request->description,
        ];
    }

    public function update(Request $request, PartnerCompany $partnercompany): void
    {
        $partnercompany->forceFill($this->formatParams($request, $partnercompany))->save();

        $partnercompany->updateMedia($request);
    }

    public function deletable(PartnerCompany $partnercompany): void
    {
    }
}
