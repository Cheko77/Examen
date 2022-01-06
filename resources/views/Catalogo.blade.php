<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">




  <style>
  body {
    font-family: 'Nunito', sans-serif;
  }
  </style>
</head>
<body >
  <div class="container wow fadeIn">
    <div class="row mt-4 d-flex justify-content-center">
      <div class="col-md-12 col-lg-12 col-xl-12 offset-xl-1">
        <div class="card text-dark bg-light mb-3" >

          <div class="card-header">
            <div class="d-flex justify-content-start"><h2>Catalogo</h2></div>
            <div class="d-flex justify-content-end"><a  href="{{route('catalogo.login')}}" class="btn btn-outline-danger btn-sm"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">salir</a></div>

            </div>
            <div class="card-body">

              <div class="form-outline mb-4">
                <a class="btn btn-outline-primary" data-bs-toggle="modal" href="#agregaEmpleado" role="button">Agrega empleado</a>
              </div>
              <div class="row">

                <div class="col-xl-4 col-md-6 col-12 my-2">
                  <h4>Busca Empleado</h4>
                  <input type="text" class="form-control" id="buscaEmpleado" name="buscaEmpleado" oninput="filtraEmpleado();">



                </div>

                <div class="col-xl-2 col-md-3 col-6 my-2">
                  <h4>Empresas</h4>

                  @foreach($empresas as $empresa)
                    <div class="d-flex align-items-center">
                      <input class="mr-2" type="checkbox" name="empresas"
                      id="empresa{{$empresa->nombre}}" onChange="filtrar_tabla()" value="{{$empresa->nombre}}">
                      <label class="form-check-label fontS12" for="empresa{{$empresa->nombre}}">
                        {{$empresa->nombre}}
                      </label>
                    </div>
                  @endforeach



                </div>

                <div class="col-xl-2 col-md-3 col-6 my-2">
                  <h4>Departamentos</h4>

                  @foreach($departamentos as $departamento)
                    <div class="d-flex align-items-center">
                      <input class="mr-2" type="checkbox" name="departamentos"
                      id="departamento{{$departamento->nombre}}" onChange="filtrar_tabla()" value="{{$departamento->nombre}}">
                      <label class="form-check-label fontS12" for="departamento{{$departamento->nombre}}">
                        {{$departamento->nombre}}
                      </label>
                    </div>
                  @endforeach



                </div>
              </div>

              <table id="table_id" class="display">
                <thead>
                  <tr>
                    <th>Empleado</th>
                    <th>Departamento</th>
                    <th>Empresa</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($empleados as $empleado)
                    <tr>
                      <td>{{$empleado->nombre_empleado}}</td>
                      <td>{{$empleado->nombre_departamento}}</td>
                      <td>{{$empleado->nombre_empresa}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!--------- Modals --------->

    <div class="modal fade" id="agregaEmpleado" aria-hidden="true" aria-labelledby="agregaEmpleado" tabindex="-1">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="agregaEmpleadoTitulo">Agrega nuevo empleado</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="formularioAgregaEmpleado">
              <div class="row">
                <div class="col-6 mb-3">
                  <label for="nombre" class="form-label">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="col-6 mb-3">
                  <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                  <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                </div>
                <div class="col-6 mb-3">
                  <label for="correo" class="form-label">Correo electronico</label>
                  <input type="email" class="form-control" id="correo" name="correo" required>
                </div>
                <div class="col-6 mb-3">
                  <label for="genero" class="form-label">Genero</label>
                  <select class="form-control" id="genero" name="genero">
                    <option value="" disabled selected>Selecciona...</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                  </select>
                </div>
                <div class="col-6 mb-3">
                  <label for="telefono" class="form-label">Telefono</label>
                  <input type="tel" class="form-control" id="telefono" name="telefono" pattern="^[0-9]+([0-9]+)?$" onkeypress="return SoloNumeros(event);">
                </div>
                <div class="col-6 mb-3">
                  <label for="celular" class="form-label">Celular</label>
                  <input type="tel" class="form-control" id="celular" name="celular" pattern="^[0-9]+([0-9]+)?$" onkeypress="return SoloNumeros(event);">
                </div>
                <div class="col-6 mb-3">
                  <label for="departamento" class="form-label">Departamento</label>
                  <select class="form-control" id="departamento" name="departamento" required>
                    <option value="" disabled selected>Selecciona...</option>
                    @foreach($departamentos as $departamento)
                      <option value="{{$departamento->idDepartamento}}">{{$departamento->idDepartamento}} - {{$departamento->nombre}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-6 mb-3">
                  <label for="empresa" class="form-label">Empresa</label>
                  <select class="form-control" id="empresa" name="empresa" required>
                    <option value="" disabled selected>Selecciona...</option>
                    @foreach($empresas as $empresa)
                      <option value="{{$empresa->idEmpresa}}">{{$empresa->idEmpresa}} - {{$empresa->nombre}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="col-6 mb-3">
                  <label for="fecha_ingreso" class="form-label">Fecha de Ingreso</label>
                  <input type="text" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="{{\Carbon\Carbon::now()->format('d-m-Y')}}" disabled >
                </div>


            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" onclick="enviaFormulario()">Aceptar</button>

        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready( function () {
    $('#table_id').dataTable({
      "responsive": false,
      "ordering": true,
      language: {
        "sProcessing": "Procesando...",
        "sLengthMenu": "Mostrar _MENU_ registros",
        "sZeroRecords": "No se encontraron resultados",
        "sEmptyTable": "Ningún dato disponible en esta tabla",
        "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix": "",
        "sSearch": "Buscar:",
        "sUrl": "",
        "sInfoThousands": ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
          "sFirst": "Primero",
          "sLast": "Último",
          "sNext": "Siguiente",
          "sPrevious": "Anterior"
        }
      }
    });
  } );
  function SoloNumeros(evt){
    if(window.event){ //asignamos el valor de la tecla a keynum
      keynum = evt.keyCode; //IE
    }
    else{
      keynum = evt.which; //FF
    }
    //console.log(keynum);
    //comprobamos si se encuentra en el rango numérico
    if(keynum >= 48 && keynum <= 57 ){
      return true;
    }
    else{
      return false;
    }
  }

  function enviaFormulario(){
    var reportVal=document.forms['formularioAgregaEmpleado'].reportValidity();
    if(reportVal){
      console.log("ya esta validado");
      formData=new FormData($('#formularioAgregaEmpleado')[0]);
      console.log(formData);
      fetch("{{route('catalogo.registraEmpleado')}}", {
        headers: {
          "X-CSRF-Token": '{{csrf_token()}}',
        },
        method: "post",
        credentials: "same-origin",
        body:  formData
      }).then(res => res.json())
      .catch(function (error) {
        console.error('Error:', error)
      })
      .then(function (response) {
        console.log("--------Respuesta----------")
        console.log(response);

      }).finally(function () {
        location.reload();
      });

    }else{
      console.log("aun no pasa")
    }
  }

  function filtrar_tabla() {
    var table = $('#table_id').dataTable();
    var empresas = $('input:checkbox[name="empresas"]:checked').map(function () {
      return this.value;
    }).get().join('|');
    table.fnFilter(empresas, 2, true, false, false, false);

    var departamentos = $('input:checkbox[name="departamentos"]:checked').map(function () {
      return this.value;
    }).get().join('|');
    table.fnFilter(departamentos, 1, true, false, false, false);

  }

  function filtraEmpleado(){
    var table = $('#table_id').dataTable();
    empleado=$("#buscaEmpleado").val();
    console.log(empleado);
    table.fnFilter(empleado, 0);
  }
</script>
</body>
</html>
