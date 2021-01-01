<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyProgram extends Model
{
    use HasFactory;

    protected $table = 'interna_study_programs';

    public function users() {
        return $this->hasMany(User::class, 'study_program_id', 'id');
    }

    public function timelines() {
        return $this->hasMany(Timeline::class, 'study_program_id', 'id');
    }
}
