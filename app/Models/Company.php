<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'interna_companies';

    protected $fillable = [
        'name',
        'address',
        'email',
        'company_phone',
        'supervisor',
        'supervisor_phone',
        'npwp',
        'siup',
        'status',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
