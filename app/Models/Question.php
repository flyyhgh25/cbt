<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['exam_id', 'section_id', 'type', 'content', 'media', 'point'])]
class Question extends Model
{
    public function exam(): BelongsTo
    {
        return $this->belongsTo(Exam::class);
    }
    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }
    public function options(): HasMany
    {
        return $this->hasMany(QuestionOption::class);
    }
    public function examSnapshots(): HasMany
    {
        return $this->hasMany(ExamSnapshot::class);
    }
}
