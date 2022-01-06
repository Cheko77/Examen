<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
  use HasFactory;
  protected $table = 'empleados';
  public $timestamps = false;
  protected $primaryKey = 'idEmpleados';
  protected $fillable = [
    'nombre',
    'fecha_nacimiento',
    'correo',
    'genero',
    'telefono',
    'celular',
    'fecha_ingreso',
    'usuario',
    'pass',
    'rol',
    'visible',
  ];
  public static function createEmpleados(
    $nombre,
    $fecha_nacimiento,
    $correo,
    $genero,
    $telefono,
    $celular,
    $fecha_ingreso,
    $usuario,
    $pass,
    $rol,
    $visible='SI'
  ){
    return empleados::create(
      [
        'nombre'=>$nombre,
        'fecha_nacimiento'=>$fecha_nacimiento,
        'correo'=>$correo,
        'genero'=>$genero,
        'telefono'=>$telefono,
        'celular'=>$celular,
        'fecha_ingreso'=>$fecha_ingreso,
        'usuario'=>$usuario,
        'pass'=>$pass,
        'rol'=>$rol,
        'visible'=>$visible,
      ]
    );
  }
}
