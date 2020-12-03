<?php

namespace App\Listeners;

use App\Events\ViewsCounter;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ResolveViewCounter
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ViewsCounter  $event
     * @return void
     */
    public function handle(ViewsCounter $event)
    {
        $oldView = $event->postsCountView->view;
        $view = $oldView + 1;
        $event->postsCountView->update(['view' => $view]);
    }
}
