<?php

namespace App\Models\Lokasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kabupaten extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    public $timestamps = true;

    /**
     * Get all of the kecamatans for the Kabupaten
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kecamatans(): HasMany
    {
        return $this->hasMany(Kecamatan::class);
    }
}
