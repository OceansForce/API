<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Erabiltzailea2 extends Model
{
    /** @use HasFactory<\Database\Factories\Erabiltzailea2Factory> */
    use HasFactory;

    protected $table = "erabiltzaileak";

    protected $primaryKey= "id";

    protected $fillable = [
        'izena',
        'abizena',
        'email',
        'pasahitza',
        'remember_token',
        'jaiotze_data',
        'created_at',
        'updated_at',
    ];
}
