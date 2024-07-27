<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    public function option(): HasMany
    {
        return $this->hasMany(QuestionOption::class);
    }
}
