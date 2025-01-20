<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class N_M extends Model
{
    /** @use HasFactory<\Database\Factories\NMFactory> */
    use HasFactory;

    public $timestamps = false;

    protected $table='erabiltzaileak_moduluak';
    protected $primaryKey= ['erabiltzaile_id', 'modulu_id'];

    protected $fillable=[
        'erabiltzaile_id',
        'modulu_id',
    ];

}
