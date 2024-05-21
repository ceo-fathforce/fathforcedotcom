<?php

namespace App\Services\Customize;

use App\Models\Customize\Servicetext;
use Illuminate\Http\Request;

class ServicetextService
{
    public function create(Request $request): Servicetext
    {
        $servicetext = Servicetext::forceCreate($this->formatParams($request));

        return $servicetext;
    }

    private function formatParams(Request $request, ?Servicetext $servicetext = null): array
    {
        return [
            'name' => $request->name,
        ];
    }

    public function update(Request $request, Servicetext $servicetext): void
    {
        $servicetext->forceFill($this->formatParams($request, $servicetext))->save();

    }

    public function deletable(Servicetext $servicetext): void
    {
    }
}
