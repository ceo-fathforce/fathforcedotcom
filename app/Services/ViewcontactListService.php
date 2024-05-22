<?php

namespace App\Services;

use App\Contracts\ListGenerator;
use App\Http\Resources\ViewcontactResource;
use App\Models\Viewcontact;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ViewcontactListService extends ListGenerator
{
    protected $allowedSorts = ['created_at', 'first'];

    protected $defaultSort = 'first';

    public function getHeaders(): array
    {
        $headers = [
            [
                'key' => 'first',
                'label' => trans('viewcontact.props.first'),
                'sortable' => true,
                'visibility' => true,
            ],
            [
                'key' => 'last',
                'label' => trans('viewcontact.props.last'),
                'sortable' => false,
                'visibility' => true,
            ],
            [
                'key' => 'email',
                'label' => trans('viewcontact.props.email'),
                'sortable' => false,
                'visibility' => true,
            ],
            [
                'key' => 'department',
                'label' => trans('viewcontact.props.department'),
                'sortable' => false,
                'visibility' => true,
            ],
            [
                'key' => 'message',
                'label' => trans('viewcontact.props.message'),
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
        return Viewcontact::query()
            ->filter([
                'App\QueryFilters\LikeMatch:search,title,description',
            ]);
    }

    public function paginate(Request $request): AnonymousResourceCollection
    {
        $sort = $this->getSort($this->allowedSorts, $this->defaultSort);
        $order = $this->getOrder($this->defaultOrder);
        $perPage = $this->getPageLength();
        $currentPage = $this->getCurrentPage();

        return ViewcontactResource::collection($this->filter($request)
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
