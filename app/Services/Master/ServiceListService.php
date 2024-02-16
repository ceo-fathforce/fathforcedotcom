<?php

namespace App\Services\Master;

use App\Models\Master\Servicelist;
use Illuminate\Http\Request;

class ServicelistService
{
    public function create(Request $request): Servicelist
    {
        $servicelist = Servicelist::forceCreate($this->formatParams($request));

        $servicelist->addMedia($request);

        return $servicelist;
    }

    private function formatParams(Request $request, ?Servicelist $servicelist = null): array
    {
        return [
            'name' => $request->name,
            'slug' => strtolower(str_replace(' ', '-', $request->name)),
            'description' => $request->description,
        ];
    }

    public function update(Request $request, Servicelist $servicelist): void
    {
        $servicelist->forceFill($this->formatParams($request, $servicelist))->save();

        $servicelist->updateMedia($request);
    }

    public function deletable(Servicelist $servicelist): void
    {
    }
}
