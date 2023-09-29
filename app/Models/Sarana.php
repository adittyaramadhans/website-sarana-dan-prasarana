<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sarana extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function category_name(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category', 'id');
    }

    public function prasarana_name(): BelongsTo
    {
        return $this->belongsTo(Prasarana::class, 'prasarana', 'id');
    }
    public function pengadaan(): HasMany{
        return $this->hasMany(Pengadaan::class, 'sarana_id');
    }
    public function pelaporan(): HasMany{
        return $this->hasMany(Pelaporan::class, 'sarana_id');
    }
    
}
