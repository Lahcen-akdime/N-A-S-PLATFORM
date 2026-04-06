<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Client extends User
{
    protected $fillable = [
        'ville',
        'adress',
        'user_id'
    ];
  public function user() : BelongsTo {
    return $this->belongsTo(User::class) ;
  }  
  public function workers() : BelongsToMany {
    return $this->belongsToMany(Worker::class,'demandes');
  }
}
