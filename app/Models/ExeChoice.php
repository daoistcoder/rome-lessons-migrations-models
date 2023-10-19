<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExeChoice extends Model
{
    use HasFactory;

    public function exeQuestion(): BelongsTo
    {
        return $this->belongsTo(ExeQuestion::class);
    }
}
