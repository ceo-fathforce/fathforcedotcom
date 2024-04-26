<?php

namespace App\Services\Customize;

use App\Models\Customize\Landingtext;
use Illuminate\Http\Request;

class LandingtextService
{
    public function create(Request $request): Landingtext
    {
        $landingtext = Landingtext::forceCreate($this->formatParams($request));

        return $landingtext;
    }

    private function formatParams(Request $request, ?Landingtext $landingtext = null): array
    {
        return [
            'name' => $request->name,
        ];
    }

    public function update(Request $request, Landingtext $landingtext): void
    {
        $landingtext->forceFill($this->formatParams($request, $landingtext))->save();

    }

    public function deletable(Landingtext $landingtext): void
    {
    }
}
