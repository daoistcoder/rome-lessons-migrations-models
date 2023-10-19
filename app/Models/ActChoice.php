<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ActChoice extends Model
{
    use HasFactory;

    public function actQuestion(): BelongsTo
    {
        return $this->belongsTo(ActQuestion::class);
    }

    public function actFeedback(): HasOne
    {
        return $this->hasOne(ActFeedback::class);
    }

}
