<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
  use HasFactory;
  protected $table = 'empresa';
  public $timestamps = false;
  protected $primaryKey = 'idEmpresa';
  protected $fillable = [
    'nombre',
    'fecha_creacion',
    'visible'
  ];
  public static function createEmpresa(
    $nombre,
    $fecha_creacion,
    $visible
  ){
    return empresa::create(
      [
        'nombre'=>$nombre,
        'fecha_creacion'=>$fecha_creacion,
        'visible'=>$visible
      ]
    );
  }
}
