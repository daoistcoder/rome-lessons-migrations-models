<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubTopic extends Model
{
    use HasFactory;
    
    public function topic(): BelongsTo {
        return $this->belongsTo(Topic::class);
    }

    public function courseSkillTitles(): HasMany {
        return $this->hasMany(CourseSkillTitle::class);
    }
}
