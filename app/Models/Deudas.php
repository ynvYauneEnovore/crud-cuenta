<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deudas extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_deudor', 'descripcion', 'monto', 'fecha_vencimiento', 'cliente_id', 'fecha_creacion'];
}
