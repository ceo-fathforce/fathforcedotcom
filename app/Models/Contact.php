<?php

namespace App\Models;

use App\Concerns\HasFilter;
use App\Concerns\HasMedia;
use App\Concerns\HasMeta;
use App\Concerns\HasUuid;
use App\Contracts\Mediable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;
use App\Mail\ContactMail;
use Illuminate\Support\Str;

class Contact extends Model implements Mediable
{
    use HasFactory, HasFilter, HasUuid, HasMeta, HasMedia, HasRoles;

    protected $fillable = [];

    protected $primaryKey = 'id';

    protected $table = 'contacts';

    protected $casts = [
        'meta' => 'array',
    ];

    public function getModelName(): string
    {
        return 'Project';
    }


    /**
     * The "booted" method of the model.
     *
     * @return void
     */

    protected static function booted()
    {
        static::creating(function ($contact) {
            $contact->uuid = Str::uuid(); // Generate UUID
        });
    }

    public function isEditable()
    {
        if ($this->getMeta('is_default')) {
            return false;
        }

        if (! Auth::user()->is_default && $this->hasRole('admin')) {
            return false;
        }

        // if ($this->id == \Auth::id()) {
        //     return false;
        // }

        return true;
    }
}
