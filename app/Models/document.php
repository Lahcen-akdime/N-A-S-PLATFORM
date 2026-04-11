<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document extends Model
{
    public function worker():BelongsTo {
        return $this->belongsTo(Worker::class);
    }
}
