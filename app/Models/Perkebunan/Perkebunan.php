<?php

namespace App\Models\Perkebunan;

use App\Models\Kontribusi;
use App\Models\Lokasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Perkebunan extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public $timestamps = true;

    /**
     * Get all of the distribusis for the Perkebunan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function distribusis(): HasMany
    {
        return $this->hasMany(Distribusi::class);
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
     * Get all of the hgus for the Perkebunan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hgus(): HasMany
    {
        return $this->hasMany(Hgu::class);
    }

    /**
     * Get all of the iups for the Perkebunan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function iups(): HasMany
    {
        return $this->hasMany(Iup::class);
    }

    /**
     * Get all of the izin lokasis for the Perkebunan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function izin_lokasis(): HasMany
    {
        return $this->hasMany(IzinLokasi::class);
    }

    /**
     * Get all of the koperasis for the Perkebunan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function koperasis(): HasMany
    {
        return $this->hasMany(Koperasi::class);
    }

    /**
     * Get all of the penanamans for the Perkebunan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function penanamans(): HasMany
    {
        return $this->hasMany(Penanaman::class);
    }

    /**
     * Get all of the lokasi_pabriks for the Perkebunan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lokasi_pabriks(): HasMany
    {
        return $this->hasMany(LokasiPabrik::class);
    }

    /**
     * Get all of the iblhs for the Perkebunan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function iblhs(): HasMany
    {
        return $this->hasMany(Iblh::class);
    }

    /**
     * Get all of the perolehan_lahan for the Perkebunan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function perolehan_lahans(): HasMany
    {
        return $this->hasMany(PerolehanLahan::class);
    }

    /**
     * Get all of the petanis for the Perkebunan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function petanis(): HasMany
    {
        return $this->hasMany(Petani::class);
    }

    /**
     * Get all of the sertifikats for the Perkebunan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sertifikats(): HasMany
    {
        return $this->hasMany(Sertifikat::class);
    }

    /**
     * Get all of the produksi_kebuns for the Perkebunan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function produksi_kebuns(): HasMany
    {
        return $this->hasMany(ProduksiKebun::class);
    }

}
