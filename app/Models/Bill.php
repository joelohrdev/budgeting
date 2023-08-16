<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Bill extends Model
{
    use HasSlug;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    protected $fillable = [
        'name',
        'slug',
        'due_date',
        'balance',
        'limit',
        'rate',
        'type',
    ];

    protected $casts = [
        'due_date' => 'date:Y-m-d',
        'balance' => 'decimal:2',
        'limit' => 'decimal:2',
        'rate' => 'decimal:2',
    ];
}
