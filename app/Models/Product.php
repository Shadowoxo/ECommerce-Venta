<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Campos que se pueden llenar masivamente
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category',
        'tags',
    ];

    /**
     * Devuelve las etiquetas como array separadas por coma
     */
    public function getTagsArrayAttribute()
    {
        return explode(',', $this->tags);
    }
}
