<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Work extends Model
{
    protected $fillable = ['name'];
    public function worker():HasMany{
        return $this->hasMany(Worker::class);
    }
}
