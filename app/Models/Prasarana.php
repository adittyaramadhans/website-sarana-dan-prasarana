<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prasarana extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function category_name(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category', 'id');
    }
    public function bangunan_name(): BelongsTo
    {
        return $this->belongsTo(Bangunan::class, 'bangunan', 'id');
    }
}
