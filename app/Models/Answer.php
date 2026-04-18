<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['exam_snapshot_id', 'answered'])]
class Answer extends Model
{
    public function examSnapshot(): BelongsTo
    {
        return $this->belongsTo(ExamSnapshot::class);
    }
}
