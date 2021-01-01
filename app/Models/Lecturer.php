<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    protected $table = 'interna_lecturers';

    public function jakas(){
        return $this->belongsTo(Jaka::class, 'jaka_id', 'id');
    }

    public function positions(){
        return $this->belongsTo(Position::class, 'position_id', 'id');
    }
}
