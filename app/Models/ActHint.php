<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActHint extends Model
{
    use HasFactory;

    public function actQuestion(): BelongsTo
    {
        return $this->belongsTo(ActQuestion::class);
    }
}
