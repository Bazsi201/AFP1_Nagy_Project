<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function question() {
        return $this->BelongsTo(Question::class);
    }

    public function responses()
    {
        return $this->hasMany(SurveyResponse::class);
    }
}
