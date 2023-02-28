<?php

namespace App\Models;

use App\Models\Lokasi\Desa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lokasi extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Get the desa that owns the Lokasi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function desa(): BelongsTo
    {
        return $this->belongsTo(Desa::class);
    }
}
