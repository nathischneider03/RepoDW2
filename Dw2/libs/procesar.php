<?php
$ errores =[];
$ error = 0 ;
//FILTER_SANITIZE_FULL_SPECIAL_CHARS
si ( $ _POST )
{
  si ( $ _POST [ 'nombre' ]== "" )
  {
    $ error ++;
    array_push ( $ errores , "El nombre no debe estar vacio" );
  }
  if ( $ _POST [ 'apellido' ]== "" )
  {
    $ error ++;
    array_push ( $ errores , "El apellido no debe estar vacio" );
  }
  $ nfecha = date_parse ( $ _POST [ 'fenac' ]);
  if ( $ nfecha [ 'error_count' ])
   {
     $ error ++;
     array_push ( $ errores , "la fecha debe ser valida" );
   }
   if (! filter_var ( $ _POST [ 'ecorreo' ], FILTER_VALIDATE_EMAIL )){
       $ error ++;
       array_push ( $ errores , "la el email debe ser valido" );
   }
si ( $ error > 0 ) {
  print_r ( $ errores );
} más
{
  echo  "la solicitud fue procesada" ;
}

} más {
echo  "la solicitud no puede ser procesada" ;
}




 ?>
