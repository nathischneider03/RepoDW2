<!--crear un formulario que envie nombre, apellido y fecha de nacimiento-->

<html lang="en" dir="ltr">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<head>
<title>Formulario</title>
</head>
<body>
<h1>Hola</h1>

<form class="" action="formulario.php" method="post">
  <div class="nombre">
    <input type="text" class="form-control" placeholder="Nombre" aria-label="First name">
  </div>
  <div class="apellido">
    <input type="text" class="form-control" placeholder="Apellido" aria-label="Last name">
  </div>
 <div class="form-outline mb-4">
    <input type="date" id="fenac" class="form-control" data-date-format="DD/MMM/YYY"/>
    <label class="form-label" for="form4Example3">Fecha de Nacimiento</label>
  </div>
     <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</div>
</form>

</body>
</html>
