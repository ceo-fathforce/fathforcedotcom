<?php

namespace App\Services\Master;

use App\Contracts\ListGenerator;
use App\Http\Resources\Master\SocialmediaResource;
use App\Models\Master\Socialmedia;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SocialmediaListService extends ListGenerator
{
    protected $allowedSorts = ['created_at', 'facebook'];

    protected $defaultSort = 'facebook';

    public function getHeaders(): array
    {
        $headers = [
            [
                'key' => 'facebook',
                'label' => trans('master.socialmedia.props.facebook'),
                'sortable' => false,
                'visibility' => true,
            ],
            [
                'key' => 'instagram',
                'label' => trans('master.socialmedia.props.instagram'),
                'sortable' => false,
                'visibility' => true,
            ],
            [
                'key' => 'youtube',
                'label' => trans('master.socialmedia.props.youtube'),
                'sortable' => false,
                'visibility' => true,
            ],
            [
                'key' => 'twitter',
                'label' => trans('master.socialmedia.props.twitter'),
                'sortable' => false,
                'visibility' => true,
            ],
            [
                'key' => 'telegram',
                'label' => trans('master.socialmedia.props.telegram'),
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
        return Socialmedia::query()
            ->filter([
                'App\QueryFilters\LikeMatch:search,facebook,instagram,youtube,twitter,telegram',
            ]);
    }

    public function paginate(Request $request): AnonymousResourceCollection
    {
        $sort = $this->getSort($this->allowedSorts, $this->defaultSort);
        $order = $this->getOrder($this->defaultOrder);
        $perPage = $this->getPageLength();
        $currentPage = $this->getCurrentPage();

        return SocialmediaResource::collection($this->filter($request)
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
