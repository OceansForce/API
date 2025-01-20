<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class moduloak extends Model
{
    /** @use HasFactory<\Database\Factories\ModuloakFactory> */
    use HasFactory;

    //desactibar orario de creacion
    public $timestamps = false;

    protected $table='moduluak';
    protected $primaryKey='id';

    protected $fillable=[
        'id',
        'izena',
        'gela',
    ];
}
