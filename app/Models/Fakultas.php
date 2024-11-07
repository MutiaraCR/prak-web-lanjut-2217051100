<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;

    protected $table = 'fakultas';
    protected $guarded = ['id'];

    // Relasi dengan UserModel
    public function users() {
        return $this->hasMany(UserModel::class, 'fakultas_id');
    }
}
