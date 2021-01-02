<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'interna_students';

    protected $fillable = [
        'name',
        'nim',
        'gender',
        'email',
        'line_account',
        'phone',
        'batch',
        'description',
        'photo',
    ];
}
