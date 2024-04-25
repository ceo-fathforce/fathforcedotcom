<?php

namespace App\Models;

use App\Models\Blog\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    protected static function booted()
    {
        static::creating(function ($contact) {
            $contact->uuid = Str::uuid(); // Generate UUID
        });
    }
}
