<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aitool extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'link',
        'hasFreePlan',
        'price',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
