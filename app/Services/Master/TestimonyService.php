<?php

namespace App\Services\Master;

use App\Models\Master\Testimony;
use Illuminate\Http\Request;

class TestimonyService
{
    public function create(Request $request): Testimony
    {
        $testimony = Testimony::forceCreate($this->formatParams($request));

        $testimony->addMedia($request);

        return $testimony;
    }

    private function formatParams(Request $request, ?Testimony $testimony = null): array
    {
        return [
            'name' => $request->name,
            'slug' => strtolower(str_replace(' ', '-', $request->name)),
            'description' => $request->description,
        ];
    }

    public function update(Request $request, Testimony $testimony): void
    {
        $testimony->forceFill($this->formatParams($request, $testimony))->save();

        $testimony->updateMedia($request);
    }

    public function deletable(Testimony $testimony): void
    {
    }
}
