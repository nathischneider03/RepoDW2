<?php
require("contenido.php");
require("cosas.php");
?>
<!DOCTYPEhtml >
< html  lang =" es " dir =" ltr " >
  < cabeza >
    < juego de caracteres meta  =" utf-8 " >
    < título > </ título >
  </ cabeza >
  < cuerpo >
  < div  clase =" contenedor " >
    < clase div  =" encabezado " >
        < ul >
          <?php
          menú ( $ menú );
           ?>
        </ ul >
    </ div >
    < div  clase =" cuerpo " >

      <?php
        if ( isset ( $ menú [ $ _GET [ "p" ]- 1 ])) { ?>
          < h3 > <?php  echo  $ menú [ $ _GET [ "p" ]- 1 ][ 'titulo' ]; ?> </ h3 >
          < p > <?php  echo  $ menú [ $ _GET [ "p" ]- 1 ][ 'contenido' ]; ?> </ p >
          <?php
        } más {
          echo  "no se encontro elemento" ;
        }
       ?>

< anterior >
<?php
//rint_r($menú);
 ?>
</ pre >

      <?php
      //echo "<p> el valor de p es ".$_GET["p"]." y ".$_GET["q"]."</p>";
    // si ($_GET["p"]==1)
    // {
    // pagina1();
    // } si no ($_GET["p"]==2) {
    // pagina2();
    // } si no ($_GET["p"]==3) {
    // pagina3();
    // }

      ?>



    </ div >
    < div  clase ="" >
      < formulario  clase ="" acción =" procesar.php " método =" post " >
< tipo de entrada  =" texto " nombre =" nombre " valor ="" placeholder =" Ingrese el nombre " > < br > 
< input  type =" text " name =" apellido " value ="" placeholder =" ingrese Apellido " > < br >
< input  type =" text " name =" fenac " value =" <?php  echo  date ( "Ymd" ); ?> " placeholder =" ingresar Fecha de Nacimiento " > < br >
< tipo de entrada  =" texto " nombre =" ecorreo " valor ="" placeholder =" ingresar una dir. de correo " > < br >
< tipo de botón  =" enviar " > Enviar </ botón >
      </ formulario >

    </ div >

  </ div >
  </ cuerpo >
</ html >
