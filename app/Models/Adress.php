<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    use HasFactory;

    protected $table = 'adresses';

    protected $fillable = [
        'name',
        'ibge_code',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'adress_id', 'id');
    }
}
