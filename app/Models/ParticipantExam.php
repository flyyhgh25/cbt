<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['participant_id', 'exam_id', 'status', 'started_at', 'ended_at'])]
class ParticipantExam extends Model
{
    public function participant(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function exam(): BelongsTo
    {
        return $this->belongsTo(Exam::class);
    }

    public function examSnapshots()
    {
        return $this->hasMany(ExamSnapshot::class);
    }

    public function score()
    {
        return $this->hasOne(Score::class);
    }
}
