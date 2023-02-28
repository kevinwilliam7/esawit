<?php

namespace App\Models\Pabrik;

use App\Models\Kontribusi;
use App\Models\Lokasi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Pabrik extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Get all of the produksis for the Pabrik
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function produksis(): HasMany
    {
        return $this->hasMany(ProduksiPabrik::class);
    }

    /**
     * Get all of the suppliers for the Pabrik
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function suppliers(): HasMany
    {
        return $this->hasMany(Supplier::class);
    }

    /**
     * Get all of the lokasis for the Perkebunan
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function lokasis(): MorphMany
    {
        return $this->morphMany(Lokasi::class, 'kategori');
    }

    /**
     * Get all of the kontribusis for the Perkebunan
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function kontribusis(): MorphMany
    {
        return $this->morphMany(Kontribusi::class, 'kategori');
    }
}
