<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jaka extends Model
{
    use HasFactory;

    protected $table = 'interna_jakas';

    protected $fillable = [
        'jaka',
    ];

    public function users() {
        return $this->hasMany(User::class, 'jaka_id', 'id');
    }
}
