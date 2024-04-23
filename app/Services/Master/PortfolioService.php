<?php

namespace App\Services\Master;

use App\Models\Master\Portfolio;
use App\Models\Master\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioService
{
    public function preRequisite(): array
    {
        $list = PortfolioCategory::get();
        $portfoliocategory = [];
        foreach ($list as $item => $value) {
            $portfoliocategory[] = ['value' => $value->id, 'label' => $value->title];
        }
        return compact('portfoliocategory');
    }
    
    public function create(Request $request): Portfolio
    {
        $portfolio = Portfolio::forceCreate($this->formatParams($request));

        $portfolio->addMedia($request);

        return $portfolio;
    }

    private function formatParams(Request $request, ?Portfolio $portfolio = null): array
    {
        return [
            'name' => $request->name,
            'slug' => strtolower(str_replace(' ','-',$request->name)),
            'portfolio_category_id' => $request->portfoliocategory,
            'description' => $request->description,
            'url' => $request->url,
        ];
    }

    public function update(Request $request, Portfolio $portfolio): void
    {
        $portfolio->forceFill($this->formatParams($request, $portfolio))->save();

        $portfolio->updateMedia($request);
    }

    public function deletable(Portfolio $portfolio): void
    {
    }
}
