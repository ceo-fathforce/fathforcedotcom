<?php

namespace App\Services\Customize;

use App\Models\Customize\Generaltext;
use Illuminate\Http\Request;

class GeneraltextService
{
    public function create(Request $request): Generaltext
    {
        $generaltext = Generaltext::forceCreate($this->formatParams($request));

        return $generaltext;
    }

    private function formatParams(Request $request, ?Generaltext $generaltext = null): array
    {
        return [
            'name' => $request->name,
        ];
    }

    public function update(Request $request, Generaltext $generaltext): void
    {
        $generaltext->forceFill($this->formatParams($request, $generaltext))->save();

    }

    public function deletable(Generaltext $generaltext): void
    {
    }
}
