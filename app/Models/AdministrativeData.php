<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdministrativeData extends Model
{
    use HasFactory;

    protected $table = 'interna_administrative_data';

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
