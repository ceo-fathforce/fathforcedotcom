<?php

namespace App\Services\Master;

use App\Contracts\ListGenerator;
use App\Http\Resources\Master\CompanydataResource;
use App\Models\Master\Companydata;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CompanydataListService extends ListGenerator
{
    protected $allowedSorts = ['created_at', 'completedprojects'];

    protected $defaultSort = 'completedprojects';

    public function getHeaders(): array
    {
        $headers = [
            [
                'key' => 'completedprojects',
                'label' => trans('master.companydata.props.completedprojects'),
                'sortable' => false,
                'visibility' => true,
            ],
            [
                'key' => 'totalproducts',
                'label' => trans('master.companydata.props.totalproducts'),
                'sortable' => false,
                'visibility' => true,
            ],
            [
                'key' => 'satisfiedcostumers',
                'label' => trans('master.companydata.props.satisfiedcostumers'),
                'sortable' => false,
                'visibility' => true,
            ],
            [
                'key' => 'employees',
                'label' => trans('master.companydata.props.employees'),
                'sortable' => false,
                'visibility' => true,
            ],
        ];

        if (request()->ajax()) {
            $headers[] = $this->actionHeader;
        }

        return $headers;
    }

    public function filter(Request $request): Builder
    {
        return Companydata::query()
            ->filter([
                'App\QueryFilters\LikeMatch:search,completedprojects,totalproducts,satisfiedcostumers,employees',
            ]);
    }

    public function paginate(Request $request): AnonymousResourceCollection
    {
        $sort = $this->getSort($this->allowedSorts, $this->defaultSort);
        $order = $this->getOrder($this->defaultOrder);
        $perPage = $this->getPageLength();
        $currentPage = $this->getCurrentPage();

        return CompanydataResource::collection($this->filter($request)
                ->orderBy($sort, $order)
                ->paginate((int) $perPage, ['*'], 'current_page'))
        ->additional([
            'headers' => $this->getHeaders(),
            'meta' => [
                'allowed_sorts' => $this->allowedSorts,
                'default_sort' => $this->defaultSort,
                'default_order' => $this->defaultOrder,
            ],
        ]);
    }

    public function list(Request $request): AnonymousResourceCollection
    {
        return $this->paginate($request);
    }
}
