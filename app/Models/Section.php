<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['no_section', 'title', 'description', 'total_question', 'is_media_content'])]
class Section extends Model
{
    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
}
