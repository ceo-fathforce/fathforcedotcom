<?php

namespace App\Services\Master;

use App\Models\Master\PartnerSchool;
use Illuminate\Http\Request;

class PartnerSchoolService
{
    
    public function create(Request $request): PartnerSchool
    {
        $partnerschool = PartnerSchool::forceCreate($this->formatParams($request));

        $partnerschool->addMedia($request);

        return $partnerschool;
    }

    private function formatParams(Request $request, ?PartnerSchool $partnerschool = null): array
    {
        return [
            'name' => $request->name,
            'slug' => strtolower(str_replace(' ','-',$request->name)),
            'description' => $request->description,
        ];
    }

    public function update(Request $request, PartnerSchool $partnerschool): void
    {
        $partnerschool->forceFill($this->formatParams($request, $partnerschool))->save();

        $partnerschool->updateMedia($request);
    }

    public function deletable(PartnerSchool $partnerschool): void
    {
    }
}
