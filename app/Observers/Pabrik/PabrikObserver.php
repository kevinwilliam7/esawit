<?php

namespace App\Observers\Pabrik;

use App\Models\Pabrik\Pabrik;
use Illuminate\Support\Str;

class PabrikObserver
{
    /**
     * Handle the Pabrik "creating" event.
     *
     * @param  \App\Models\Pabrik\Pabrik  $pabrik
     * @return void
     */
    public function creating(Pabrik $pabrik)
    {
        $pabrik->slug = Str::slug($pabrik->nama);
        return true;
    }

    /**
     * Handle the Pabrik "created" event.
     *
     * @param  \App\Models\Pabrik\Pabrik  $pabrik
     * @return void
     */
    public function created(Pabrik $pabrik)
    {
        //
    }

    /**
     * Handle the Pabrik "updated" event.
     *
     * @param  \App\Models\Pabrik\Pabrik  $pabrik
     * @return void
     */
    public function updated(Pabrik $pabrik)
    {
        //
    }

    /**
     * Handle the Pabrik "deleted" event.
     *
     * @param  \App\Models\Pabrik\Pabrik  $pabrik
     * @return void
     */
    public function deleted(Pabrik $pabrik)
    {
        //
    }

    /**
     * Handle the Pabrik "restored" event.
     *
     * @param  \App\Models\Pabrik\Pabrik  $pabrik
     * @return void
     */
    public function restored(Pabrik $pabrik)
    {
        //
    }

    /**
     * Handle the Pabrik "force deleted" event.
     *
     * @param  \App\Models\Pabrik\Pabrik  $pabrik
     * @return void
     */
    public function forceDeleted(Pabrik $pabrik)
    {
        //
    }
}
