<?php

namespace App\Services\Master;

use App\Models\Master\Faq;
use Illuminate\Http\Request;

class FaqService
{
    public function create(Request $request): Faq
    {
        $faq = Faq::forceCreate($this->formatParams($request));

        return $faq;
    }

    private function formatParams(Request $request, ?Faq $faq = null): array
    {
        return [
            'name' => $request->name,
            'slug' => strtolower(str_replace(' ', '-', $request->name)),
            'description' => $request->description,
        ];
    }

    public function update(Request $request, Faq $faq): void
    {
        $faq->forceFill($this->formatParams($request, $faq))->save();

    }

    public function deletable(Faq $faq): void
    {
    }
}
