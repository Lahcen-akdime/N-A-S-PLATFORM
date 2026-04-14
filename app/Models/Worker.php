<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Worker extends Model
{
    protected $fillable = [
        'experience_years',
        'adress',
        'user_id',
        'work_id',
        'profile_image',
        'work_id',
        'phone',
        'latitude',
        'longitude',
    ];
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    function work() : BelongsTo {
        return $this->belongsTo(work::class);
    }
    function clients() : BelongsToMany {
        return $this->belongsToMany(Client::class,'demandes');
    }
    public function documents():HasMany {
        return $this->hasMany(Document::class);
    }
}
