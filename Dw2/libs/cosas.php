<?php
//eco "cosas";
$ cosas = "algunas cosas" ;
$ otra = 23 ;
//echo $otra." - ".$cosas."\n";
si ( $ otra > 0 ) {
  //echo "<br>es mayor que cero";
} más {
  echo  "es menor que cero" ;
}
para ( $ i = 0 ; $ i < 5 ; $ i ++) {
//echo $i."<br>";
}
funcion  pagina1 ()
{
  echo  "<h3>OBTENER</h3>" ;
  echo  "Un array asociativo de variables pasado al script actual vía parámetros URL (también conocido como cadena de consulta). Tenga en cuenta que el array no solo se rellena para las solicitudes GET, sino para todas las solicitudes con una cadena de consulta." ;
}
funcion  pagina2 ()
{
  echo  "<h3>POST</h3>" ;
  echo  "Un array asociativo de variables pasadas al script actual a través del método POST de HTTP cuando se emplea application/x-www-form-urlencoded o multipart/form-data como Content-Type de HTTP en la petición. " ;
}
funcion  pagina3 ()
{
  echo  "<h3>SESION</h3>" ;
  echo  "Es un arreglo asociativo que contiene variables de sesión disponibles para el script actual. Ver la documentación de Funciones de sesión para más información sobre su uso. " ;
}


 menú de funciones ( $ menú )
{
  for ( $ i = 0 ; $ i < cuenta ( $ menú ); $ i ++ )
  {
    echo  "<li><a href='index.php?p=" . $ menú [ $ i ][ 'codigo' ]. "'>" . $ menú [ $ i ][ "nombre" ]. "</a></li>" ;
  }
}
 ?>
