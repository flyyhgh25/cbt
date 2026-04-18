<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['participant_exam_id', 'total_correct', 'total_incorrect', 'total_unanswer', 'total_time_taken', 'total_score'])]
class Score extends Model
{
    public function participantExam(): BelongsTo
    {
        return $this->belongsTo(ParticipantExam::class);
    }
}
