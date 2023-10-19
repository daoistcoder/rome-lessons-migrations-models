<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ActQuestion extends Model
{
    use HasFactory;

    public function activity(): BelongsTo
    {
        return $this->belongsTo(Activity::class);
    }

    public function actChoices(): HasMany
    {
        return $this->hasMany(ActChoice::class);
    }
    
    public function actHints(): HasMany
    {
        return $this->hasMany(ActHint::class);
    } 
}
