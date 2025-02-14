<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'data', 'type', 'read_at', 'notifiable_id', 'notifiable_type'
    ];

    protected $casts = [
        'data' => 'array', // Cast 'data' attribute as an array
    ];

    /**
     * Get the notifiable entity that the notification belongs to.
     */
    public function notifiable()
    {
        return $this->morphTo();
    }

    /**
     * Mark the notification as read.
     */
    public function markAsRead()
    {
        if (is_null($this->read_at)) {
            $this->forceFill(['read_at' => $this->freshTimestamp()])->save();
        }
    }

    /**
     * Determine if the notification has been read.
     */
    public function unread()
    {
        return $this->read_at === null;
    }
}
