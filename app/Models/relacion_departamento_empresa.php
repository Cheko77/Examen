<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class relacion_departamento_empresa extends Model
{
  use HasFactory;
  protected $table = 'relacion_departamento_empresa';
  public $timestamps = false;
  protected $primaryKey = 'idrelacion_departamento_empresa';
  protected $fillable = [
    'idDepartamento',
    'idEmpresa',
    'visible',
  ];
  public static function createRelacion_departamento_empresa(
    $idDepartamento,
    $idEmpresa,
    $visible
  ){
    return relacion_departamento_empresa::create(
      [
        'idDepartamento'=>$idDepartamento,
        'idEmpresa'=>$idEmpresa,
        'visible'=>$visible
      ]
    );
  }
}
