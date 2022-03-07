<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro Aprendiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<body>
<div class="container">
    <center><h1>Registro</h1></center>
<form action="{{url('/aprendiz')}}" method="post" class="row g-3 needs-validation" novalidate>
 @csrf
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="nombre" id="nombre" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom03" class="form-label">Telefono</label>
        <input type="text" class="form-control" name="telefono" id="telefono" required>
        <div class="invalid-feedback">

        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom04" class="form-label">Dirección</label>
        <input type="text" class="form-control" name="direccion" id="direccion" required>
        <div class="invalid-feedback">
        </div>
      </div>
    <div class="col-md-4">
      <label for="validationCustomUsername" class="form-label">Correo</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="correo">@</span>
        <input type="text" class="form-control" name="correo" id="correo" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>

   <div class="col-md-6">
        <label for="validationCustom06" class="form-label">Edad</label>
        <input type="text" class="form-control" name="edad" id="edad" required>
        <div class="invalid-feedback">
        </div>
      </div>
    <div class="col-12">
      <button class="btn btn-success" type="submit" value="guardar datos">Guardar</button>
    </div>
  </form>
</div>

</body>
</html>


