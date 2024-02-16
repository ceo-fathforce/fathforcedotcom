<?php

namespace App\Models\Config;

use App\Concerns\HasMeta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Config extends Model
{
    use HasMeta, LogsActivity;

    protected $fillable = ['name', 'value'];

    const ASSET_TYPES = [
        'logo',
        'logo_light',
        'icon',
        'favicon',
    ];

    protected $casts = [
        'value' => 'array',
        'meta' => 'array',
    ];

    public function getValue(string $option)
    {
        return Arr::get($this->value ?? [], $option);
    }

    public function setValue(array $options = [])
    {
        if (empty($options)) {
            return;
        }

        $value = $this->value ?? [];
        $value = array_merge($value, $options);
        $this->value = $value;
    }

    public function resetValue(array $options = [])
    {
        if (empty($options)) {
            return;
        }

        $value = $this->value ?? [];

        foreach ($options as $option) {
            unset($value[$option]);
        }

        $this->value = $value;
    }

    public static function listAll(): array
    {
        return cache()->remember('query_config_list_all', now()->addDay(1), function () {
            return Config::all()->pluck('value', 'name')->all();
        });
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('config')
            ->logAll()
            ->logExcept(['updated_at'])
            ->logOnlyDirty();
    }
}
