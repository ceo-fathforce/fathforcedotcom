<?php

namespace App\Models\Customize;

use App\Concerns\HasFilter;
use App\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Auth;

class Servicetext extends Model 
{
    use HasFactory, HasFilter, HasUuid, HasRoles;

    protected $fillable = [];

    protected $primaryKey = 'id';

    protected $table = 'servicetexts';

    public function getModelName(): string
    {
        return 'Servicetext';
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
