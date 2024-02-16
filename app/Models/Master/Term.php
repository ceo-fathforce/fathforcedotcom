<?php

namespace App\Models\Master;

use App\Concerns\HasFilter;
use App\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Auth;

class Term extends Model
{
    use HasFactory, HasFilter, HasUuid, HasRoles;

    protected $fillable = [];

    protected $primaryKey = 'id';

    protected $table = 'terms';

    public function getModelName(): string
    {
        return 'Term';
    }

    public function isEditable()
    {
        if (!Auth::user()->is_default && $this->hasRole('admin')) {
            return false;
        }

        // if ($this->id == \Auth::id()) {
        //     return false;
        // }

        return true;
    }
}
