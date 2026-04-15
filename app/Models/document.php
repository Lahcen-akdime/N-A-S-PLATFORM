<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document extends Model
{
    protected $fillable = ['type','file_path','worker_id'];
    public function worker():BelongsTo {
        return $this->belongsTo(Worker::class);
    }
}
