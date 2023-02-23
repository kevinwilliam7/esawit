<?php

namespace App\Models\Pabrik;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pabrik extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'nama';
    }
}
