<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Demande extends Model
{
    protected $fillable = ['title','state','client_id','worker_id','description','emergency'];
    public function worker() : BelongsTo {
        return $this->belongsTo(Worker::class);
    }
}
