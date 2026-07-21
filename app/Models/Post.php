<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
    ];

    /**
     * Use the slug for route model binding.
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
