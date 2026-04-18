<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['participant_exam_id', 'question_id', 'snapshot_question', 'snapshot_options', 'order'])]
class ExamSnapshot extends Model
{
    public function participantExam():BelongsTo
    {
        return $this->belongsTo(ParticipantExam::class);
    }
    public function question():BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }   
}
