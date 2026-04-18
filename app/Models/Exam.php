<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'duration', 'started_time', 'ended_time', 'is_active'])]
class Exam extends Model
{
    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
}
