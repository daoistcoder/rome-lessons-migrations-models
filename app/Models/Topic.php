<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Topic extends Model
{
    use HasFactory;

    public function level(): BelongsTo {
        return $this->belongsTo(Level::class);
    }

    public function subTopics(): HasMany {
        return $this->hasMany(SubTopic::class);
    }
}
