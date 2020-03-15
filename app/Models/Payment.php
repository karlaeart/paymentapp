<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /**
     * Get the client that owns the payment.
     */
    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }
}
