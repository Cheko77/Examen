<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use App\Models\empleados;
use App\Models\empresa;
use App\Models\departamento;
use App\Models\relacion_departamento_empleados;


class CatalogoController extends Controller
{

  public function muestraCatalogo(){

    $empresas= empresa::where("visible","SI")->get();
    $departamentos= departamento::where("visible","SI")->get();

    $empleados = empleados::select(DB::raw('empleados.nombre as nombre_empleado, departamento.nombre as nombre_departamento, empresa.nombre as nombre_empresa'))
    ->leftJoin('relacion_departamento_empleados', 'relacion_departamento_empleados.idEmpleados', '=', 'empleados.idEmpleados')
    ->leftJoin('departamento', 'relacion_departamento_empleados.idDepartamento', '=', 'departamento.idDepartamento')
    ->leftJoin('empresa', 'relacion_departamento_empleados.idEmpresa', '=', 'empresa.idEmpresa')
    ->where('empleados.visible',"SI")
    ->where('departamento.visible',"SI")
    ->where('empresa.visible',"SI")
    ->where('relacion_departamento_empleados.visible',"SI")
    ->get();

    return view('Catalogo',compact('empleados','empresas','departamentos'));
  }

  public function registraEmpleado(){
    //return request();
    $empleado=empleados::createEmpleados(
      $nombre=request('nombre'),
      $fecha_nacimiento=request('fecha_nacimiento'),
      $correo=request('correo'),
      $genero=request('genero'),
      $telefono=request('telefono'),
      $celular=request('celular'),
      $fecha_ingreso=\Carbon\Carbon::now(),
      $usuario=null,
      $pass=null,
      $rol=null,
      $visible='SI'
    );
    $relacion=relacion_departamento_empleados::createRelacion_departamento_empleados(
      $idDepartamento=request('departamento'),
      $idEmpleados=$empleado->idEmpleados,
      $idEmpresa=request('empresa'),
      $visible="SI"
    );
    return json_encode(["empleado"=>$empleado,"Relacion"=>$relacion]);
  }

}
