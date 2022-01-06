<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
  use HasFactory;
  protected $table = 'departamento';
  public $timestamps = false;
  protected $primaryKey = 'idDepartamento';
  protected $fillable = [
    'nombre',
    'fecha_creacion',
    'visible'
  ];
  public static function createDepartamento(
    $nombre,
    $fecha_creacion,
    $visible
  ){
    return departamento::create(
      [
        'nombre'=>$nombre,
        'fecha_creacion'=>$fecha_creacion,
        'visible'=>$visible
      ]
    );
  }
}
