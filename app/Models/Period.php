<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;

    protected $table = 'interna_periods';

    protected $fillable = [
        'period',
    ];

    public function users() {
        return $this->hasMany(User::class, 'period_id', 'id');
    }
}
