<pre>
<?php
//if ($_POST['nombre']=="usuario" and $_POST["contranha"]=="segundo")
//{
//print_r($_POST);
//} else
//{
//echo "usted no tiene permitido ver el contenido";

//}
$errores=[];
$error=0;
if($_POST)
{

if ($_POST['nombre']=="")
{
$error++;
array_push($errores,"El nombre no debe estar vacio");
}

if ($_POST['apellido']=="")
{
$error++;
array_push($errores,"El apellido no debe estar vacio");
}

$nfecha=date_parse($_POST['fenac']);
if ($nfecha['error_count'])
{
$error++;
array_push($errores,"La fecha debe ser valida");
}

if (filter_var($_POST['ecorreo'],FILTER_VALIDATE_EMAIL))
{
$error++;
array_push($errores,"El email debe ser valido");
}

if ($error>0){
	print_r($errores);
}

} else {
echo "la solicitud no puede ser aceptada";
}

 ?>
 </pre>