<?php

namespace App\Services\Master;

use App\Models\Master\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioCategoryService
{
    public function create(Request $request): PortfolioCategory
    {
        $portfoliocategory = PortfolioCategory::forceCreate($this->formatParams($request));

        return $portfoliocategory;
    }

    private function formatParams(Request $request, ?PortfolioCategory $portfoliocategory = null): array
    {
        return [
            'title' => $request->title,
            'slug' => strtolower(str_replace(' ','-',$request->title)),
        ];
    }

    public function update(Request $request, PortfolioCategory $portfoliocategory): void
    {
        $portfoliocategory->forceFill($this->formatParams($request, $portfoliocategory))->save();

    }

    public function deletable(PortfolioCategory $portfoliocategory): void
    {
    }
}
