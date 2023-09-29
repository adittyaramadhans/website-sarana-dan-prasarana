<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengadaan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function category_name(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category', 'id');
    }

    public function sarana(): BelongsTo
    {
        return $this->belongsTo(Sarana::class, 'sarana_id', 'id');
    }
}
