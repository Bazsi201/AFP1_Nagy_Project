<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function questions() {
        return $this->hasMany(Question::class);
    }

    public function surveys() {
        return $this->hasMany(Survey::class);
    }

    public function path() {
        return url('/questionnaires/'.$this->id);
    }

    public function publicPath() {
        return url('/surveys/'.$this->id.'-'.Str::slug($this->title));
    }
}
