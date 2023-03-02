<?php

namespace App\Models;

use App\Models\Lokasi\Desa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Kontribusi extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Get the desa that owns the Kontribusi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function desa(): BelongsTo
    {
        return $this->belongsTo(Desa::class);
    }

    /**
     * Get the parent model (perkebunan or pabrik).
     */
    public function parent(): MorphTo
    {
        return $this->morphTo(__FUNCTION__, 'kategori_type', 'kategori_id');
    }
}
