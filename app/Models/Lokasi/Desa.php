<?php

namespace App\Models\Lokasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;

    protected $fillable = ['kecamatan_id', 'name'];
    public $timestamps = true;
}
