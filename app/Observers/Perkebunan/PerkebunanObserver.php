<?php

namespace App\Observers\Perkebunan;

use App\Models\Perkebunan\Perkebunan;
use Illuminate\Support\Str;
class PerkebunanObserver
{
    /**
     * Handle the Perkebunan "creating" event.
     *
     * @param  \App\Models\Perkebunan  $perkebunan
     * @return void
     */
    public function creating(Perkebunan $perkebunan)
    {
        $perkebunan->slug = Str::slug($perkebunan->nama);
        return true;
    }
    
    /**
     * Handle the Perkebunan "created" event.
     *
     * @param  \App\Models\Perkebunan  $perkebunan
     * @return void
     */
    public function created(Perkebunan $perkebunan)
    {
        
    }

    /**
     * Handle the Perkebunan "updated" event.
     *
     * @param  \App\Models\Perkebunan  $perkebunan
     * @return void
     */
    public function updated(Perkebunan $perkebunan)
    {
        //
    }

    /**
     * Handle the Perkebunan "deleted" event.
     *
     * @param  \App\Models\Perkebunan  $perkebunan
     * @return void
     */
    public function deleted(Perkebunan $perkebunan)
    {
        //
    }

    /**
     * Handle the Perkebunan "restored" event.
     *
     * @param  \App\Models\Perkebunan  $perkebunan
     * @return void
     */
    public function restored(Perkebunan $perkebunan)
    {
        //
    }

    /**
     * Handle the Perkebunan "force deleted" event.
     *
     * @param  \App\Models\Perkebunan  $perkebunan
     * @return void
     */
    public function forceDeleted(Perkebunan $perkebunan)
    {
        //
    }
}
