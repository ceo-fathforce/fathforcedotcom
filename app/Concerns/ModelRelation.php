<?php

namespace App\Concerns;

trait ModelRelation
{
    /**
     * Get all relations
     *
     * @return array
     */
    public function relations()
    {
        return [
            'User' => 'App\Models\User',
            'Tag' => 'App\Models\Tag',
            'Comment' => 'App\Models\Comment',
            'Config' => 'App\Models\Config\Config',
            'Todo' => 'App\Models\Utility\Todo',
            'Role' => 'App\Models\Config\Role',
            'Option' => 'App\Models\Option',
            'Project' => 'App\Models\Project',
            'Product' => 'App\Models\Master\Product',
            'Portfolio' => 'App\Models\Master\Portfolio',
            'Servicelist' => 'App\Models\Master\Servicelist',
            'Gallery' => 'App\Models\Master\Gallery',
            'PartnerCompany' => 'App\Models\Master\PartnerCompany',
            'PartnerSchool' => 'App\Models\Master\PartnerSchool',
            'Post' => 'App\Models\Blog\Post',
            'Page' => 'App\Models\Landing\Page',
            'Testimony' => 'App\Models\Master\Testimony',
        ];
    }
}
