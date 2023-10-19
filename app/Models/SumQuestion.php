<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SumQuestion extends Model
{
    use HasFactory;

    public function summativeAssesment(): BelongsTo
    {
        return $this->belongsTo(SummativeAssesment::class);
    }

    public function sumChoices(): HasMany
    {
        return $this->hasMany(SumChoice::class);
    }
}
