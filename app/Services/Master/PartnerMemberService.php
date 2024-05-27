<?php

namespace App\Services\Master;

use App\Models\Master\PartnerMember;
use Illuminate\Http\Request;

class PartnerMemberService
{
    public function create(Request $request): PartnerMember
    {
        $partnermember = PartnerMember::forceCreate($this->formatParams($request));

        $partnermember->addMedia($request);

        return $partnermember;
    }

    private function formatParams(Request $request, ?PartnerMember $partnermember = null): array
    {
        return [
            'name' => $request->name,
            'slug' => strtolower(str_replace(' ', '-', $request->name)),
            'description' => $request->description,
        ];
    }

    public function update(Request $request, PartnerMember $partnermember): void
    {
        $partnermember->forceFill($this->formatParams($request, $partnermember))->save();

        $partnermember->updateMedia($request);
    }

    public function deletable(PartnerMember $partnermember): void
    {
    }
}
