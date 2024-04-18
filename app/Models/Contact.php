<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use App\Mail\ContactMail;
use Illuminate\Support\Str;

class Contact extends Model
{
    use HasFactory;

    public $fillable = [];

    protected $table = 'contacts';

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
}
