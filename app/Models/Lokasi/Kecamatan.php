<?php

namespace App\Models\Lokasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $fillable = ['kabupaten_id', 'name'];
    public $timestamps = true;
}
