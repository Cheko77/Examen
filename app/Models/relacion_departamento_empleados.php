<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class relacion_departamento_empleados extends Model
{
  use HasFactory;
  protected $table = 'relacion_departamento_empleados';
  public $timestamps = false;
  protected $primaryKey = 'idrelacion_departamento_empleados';
  protected $fillable = [
    'idDepartamento',
    'idEmpleados',
    'idEmpresa',
    'visible',
  ];
  public static function createRelacion_departamento_empleados(
    $idDepartamento,
    $idEmpleados,
    $idEmpresa,
    $visible
  ){
    return relacion_departamento_empleados::create(
      [
        'idDepartamento'=>$idDepartamento,
        'idEmpleados'=>$idEmpleados,
        'idEmpresa'=>$idEmpresa,
        'visible'=>$visible
      ]
    );
  }
}
