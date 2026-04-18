<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['question_id', 'label', 'content', 'media', 'is_correct'])]
class QuestionOption extends Model
{
    public function question():BelongsTo
    {
        return $this->belongsTo(Question::class);
    }
    
}
