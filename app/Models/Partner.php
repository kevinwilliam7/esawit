<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    protected static function booted()
    {
        Static::creating(function($partner){
            $order = (Partner::select('order')->orderBy('order', 'DESC')->limit(1)->first()->order ?? 0) + 1;
            $partner['order'] = $order;
        });
    }
}
