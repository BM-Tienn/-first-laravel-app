<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'name',
        'classify',
        'image',
        'is_public',
    ];

    public function products()
    {
        return $this->hasMany(ShopProduct::class);
    }
}
