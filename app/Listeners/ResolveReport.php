<?php

namespace App\Listeners;

use App\Events\UserReports;
use App\Models\Notifications;
use App\Models\Report;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ResolveReport
{
    /**
     * Create the event listener.
     *
     * @return void
     */

    
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     *
     * @param  UserReports  $event
     * @return void
     */
    public function handle(UserReports $event)
    {
        $data = $event->getReport->toArray();

        foreach($data as $nData){

         $reporterId =  $nData["reporter_id"];
         $userId =   $nData["user_id"];
         $postId =   $nData["post_id"];
         $commentId =  $nData["comment_id"];
         $reason =   $nData["reason"];
         $type =  $nData["type"];

        Notifications::create([
            'reporter_id' => $reporterId,
            'user_id' => $userId,
            'post_id' => $postId,
            'comment_id' => $commentId,
            'reason' => $reason,
            'type' => $type
        ]);

        }

       // $notification = Notifications::create();

    }
}
