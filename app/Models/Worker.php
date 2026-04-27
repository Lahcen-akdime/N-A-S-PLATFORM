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
        'ville',
        'user_id',
        'work_id',
        'profile_image',
        'work_id',
        'phone',
        'latitude',
        'longitude',
        'is_accepted',
    ];
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function work() : BelongsTo {
        return $this->belongsTo(work::class);
    }
    public function clients() : BelongsToMany {
        return $this->belongsToMany(Client::class,'demandes');
    }
    public function demande() : HasMany {
        return $this->hasMany(Demande::class);
    }
    public function documents():HasMany {
        return $this->hasMany(Document::class);
    }
}
