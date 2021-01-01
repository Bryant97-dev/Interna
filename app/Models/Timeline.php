<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    use HasFactory;

    protected $table = 'interna_timelines';

    public function study_programs(){
        return $this->belongsTo(StudyProgram::class, 'study_program_id', 'id');
    }
}
