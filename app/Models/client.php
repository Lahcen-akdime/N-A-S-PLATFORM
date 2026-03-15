<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
}
