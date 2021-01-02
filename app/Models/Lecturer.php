<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    protected $table = 'interna_lecturers';

    protected $fillable = [
        'name',
        'nidn',
        'nip',
        'gender',
        'email',
        'line_account',
        'phone',
        'description',
        'photo',
        'position_id',
        'jaka_id',
    ];

    public function jakas(){
        return $this->belongsTo(Jaka::class, 'jaka_id', 'id');
    }

    public function positions(){
        return $this->belongsTo(Position::class, 'position_id', 'id');
    }
}
