<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Worker extends Model
{
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    function work() : BelongsTo {
        return $this->belongsTo(work::class);
    }
    function clients() : BelongsToMany {
        return $this->belongsToMany(Client::class,'demandes');
    }
}
