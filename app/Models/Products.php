<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    // تحديد الحقول القابلة للتعبئة
    protected $fillable = [
        'name',
        'prais',
        'quantity',
        'photo',
        'description',
        'category_id',
        'season_id',
        'farm_id',
        'data',
        'productstatus',
        'slug',
    ];

    // العلاقة مع نموذج Category
    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    // العلاقة مع نموذج Season
    public function season()
    {
        return $this->belongsTo(Seasons::class);
    }

    // العلاقة مع نموذج Farm
    public function farm()
    {
        return $this->belongsTo(Farms::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->name);
            }
        });
    }
}
