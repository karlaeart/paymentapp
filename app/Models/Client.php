<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * Get the payments for the client.
     */
    public function payments()
    {
        return $this->hasMany('App\Models\Payment');
    }
}
