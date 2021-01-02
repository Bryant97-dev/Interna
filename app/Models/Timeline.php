<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Timeline extends Model
{
    use HasFactory;

    protected $table = 'interna_timelines';

    protected $fillable = [
        'date',
        'title',
        'description',
        'study_program_id',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        self::created(function (Timeline $timeline) {
            if (!$timeline->study_programs()->get()->contains(2)) {
                $timeline->study_programs()->attach(2);
            }
        });
    }

    public function study_programs(){
        return $this->belongsTo(StudyProgram::class, 'study_program_id', 'id');
    }
}
