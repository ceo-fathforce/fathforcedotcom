<?php

namespace App\Services\Customize;

use App\Models\Customize\Companytext;
use Illuminate\Http\Request;

class CompanytextService
{
    public function create(Request $request): Companytext
    {
        $companytext = Companytext::forceCreate($this->formatParams($request));

        return $companytext;
    }

    private function formatParams(Request $request, ?Companytext $companytext = null): array
    {
        return [
            'name' => $request->name,
        ];
    }

    public function update(Request $request, Companytext $companytext): void
    {
        $companytext->forceFill($this->formatParams($request, $companytext))->save();

    }

    public function deletable(Companytext $companytext): void
    {
    }
}
