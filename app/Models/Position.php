<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $table = 'interna_positions';

    public function lecturers() {
        return $this->hasMany(Lecturer::class, 'position_id', 'id');
    }
}
