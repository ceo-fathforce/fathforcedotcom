<?php

namespace App\Services\Master;

use App\Models\Master\Socialmedia;
use Illuminate\Http\Request;

class SocialmediaService
{
    public function create(Request $request): Socialmedia
    {
        $socialmedia = Socialmedia::forceCreate($this->formatParams($request));

        $socialmedia->addMedia($request);

        return $socialmedia;
    }

    private function formatParams(Request $request, ?Socialmedia $socialmedia = null): array
    {
        return [
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'twitter' => $request->twitter,
            'telegram' => $request->telegram,
        ];
    }

    public function update(Request $request, Socialmedia $socialmedia): void
    {
        $socialmedia->forceFill($this->formatParams($request, $socialmedia))->save();

        $socialmedia->updateMedia($request);
    }

    public function deletable(Socialmedia $socialmedia): void
    {
    }
}
