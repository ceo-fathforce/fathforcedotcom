<?php

namespace App\Models\Master;

use App\Concerns\HasFilter;
use App\Concerns\HasMedia;
use App\Concerns\HasMeta;
use App\Concerns\HasUuid;
use App\Contracts\Mediable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class PartnerSchool extends Model implements Mediable
{
    use HasFactory, HasFilter, HasUuid, HasMeta, HasMedia, HasRoles;

    protected $fillable = [];

    protected $primaryKey = 'id';

    protected $table = 'partner_schools';

    protected $casts = [
        'meta' => 'array',
    ];

    public function getModelName(): string
    {
        return 'PartnerSchool';
    }

    /**
     * Get the user that owns the PartnerSchool
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function isEditable()
    {
        if ($this->getMeta('is_default')) {
            return false;
        }

        if (!Auth::user()->is_default && $this->hasRole('admin')) {
            return false;
        }

        // if ($this->id == \Auth::id()) {
        //     return false;
        // }

        return true;
    }
}
