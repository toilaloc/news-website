<?php

namespace App\Listeners;

use App\Events\NotificationPosting;
use App\Models\Followers;
use App\Models\Notifications;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ResolveNotificationPosting
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
     * @param  NotificationPosting  $event
     * @return void
     */
    public function handle(NotificationPosting $event)
    {

      $postId = $event->approvalPost->id;
      $authorId = $event->approvalPost->author_id;

      $getUsers = Followers::where('author_id', $authorId)->get();
     
      foreach($getUsers as $getUser){
          Notifications::create([
                'user_id' => $getUser->user_id,
                'author_id' => $authorId,
                'reporter_id' => $authorId,
                'post_id' => $postId,
                'type' => 'newpost',
                'reason' => 'Không có lý do'
          ]);
      }
    }
}
