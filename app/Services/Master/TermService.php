<?php

namespace App\Services\Master;

use App\Models\Master\Term;
use Illuminate\Http\Request;

class TermService
{
    public function create(Request $request): Term
    {
        $term = Term::forceCreate($this->formatParams($request));

        return $term;
    }

    private function formatParams(Request $request, ?Term $term = null): array
    {
        return [
            'name' => $request->name,
            'slug' => strtolower(str_replace(' ', '-', $request->name)),
            'description' => $request->description,
        ];
    }

    public function update(Request $request, Term $term): void
    {
        $term->forceFill($this->formatParams($request, $term))->save();
    }
}
