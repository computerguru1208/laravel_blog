<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'thumbmail', 'body', 'active', 'published_at', 'user_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(related: User::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(related: Category::class);
    }
}
