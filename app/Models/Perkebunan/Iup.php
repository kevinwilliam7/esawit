<?php

namespace App\Models\Perkebunan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Iup extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'perkebunan_id',
        'created_at',
        'updated_at',
    ];

    /**
     * Get the perkebunan that owns the Distribusi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function perkebunan(): BelongsTo
    {
        return $this->belongsTo(Perkebunan::class);
    }
}
