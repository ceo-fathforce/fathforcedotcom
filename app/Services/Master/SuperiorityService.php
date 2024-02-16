<?php

namespace App\Services\Master;

use App\Models\Master\Superiority;
use Illuminate\Http\Request;

class SuperiorityService
{
    public function create(Request $request): Superiority
    {
        $superiority = Superiority::forceCreate($this->formatParams($request));

        return $superiority;
    }

    private function formatParams(Request $request, ?Superiority $superiority = null): array
    {
        return [
            'name' => $request->name,
            'slug' => strtolower(str_replace(' ', '-', $request->name)),
            'description' => $request->description,
        ];
    }

    public function update(Request $request, Superiority $superiority): void
    {
        $superiority->forceFill($this->formatParams($request, $superiority))->save();

    }

    public function deletable(Superiority $superiority): void
    {
    }
}
