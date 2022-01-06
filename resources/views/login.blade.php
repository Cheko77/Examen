<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  <style>
  body {
    font-family: 'Nunito', sans-serif;
  }
  </style>
</head>
<body >
  <div class="container wow fadeIn">
    <div class="row mt-4 d-flex justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
          <div class="card-header"> <h2>Inicia sesión</h2></div>
          <div class="card-body">
            <form>

              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Usuario:</label>
                <input type="email" id="form3Example3" class="form-control"
                placeholder="Ingresa nombre de usuario" />

              </div>

              <div class="form-outline mb-3">
                <label class="form-label" for="form3Example4">Contraseña:</label>
                <input type="password" id="form3Example4" class="form-control"
                placeholder="ingresa contraseña" />

              </div>
              <div class="text-center mt-4 pt-2">
                <a  href="{{route('catalogo.index')}}" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Ingresar</a>
              </div>

            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</body>
</html>
