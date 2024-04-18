<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class CompanyData extends Model
{
    protected $fillable = [
        'uuid', // Tambahkan kolom UUID
        'completed_projects',
        'total_products',
        'satisfied_customers',
        'employees',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = Uuid::uuid4()->toString(); // Menghasilkan UUID baru ketika data dibuat
        });
    }
}
