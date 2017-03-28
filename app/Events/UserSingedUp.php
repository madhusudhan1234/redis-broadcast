<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserSingedUp implements ShouldBroadcast
{
    use Dispatchable, SerializesModels;
    /**
     * @var
     */
    public $username;

    /**
     * Create a new event instance.
     *
     * @param $username
     */
    public function __construct($username)
    {
        $this->username = $username;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return ['test-channel'];
    }
}
