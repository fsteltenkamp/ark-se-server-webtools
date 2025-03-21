<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class AseLiveTuning extends Model
{
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
