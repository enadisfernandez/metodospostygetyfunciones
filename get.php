<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo de get</title>
  </head>
  <body>

  <form  method="GET" >
      Introduce la edad: <input name="edad" type="number" /></br>
      Introduce la fecha de nacimiento <input name="fechanac" type="date" />
      <input type="submit" value="Enviar" />
  </form>
  </br>
<?php
echo "la fecha de nacimiento recibida es: " .$_GET['fechanac'],"</br>" ;

  echo "la edad recibida es: " .$_GET['edad'];
?>
  </body>
</html>
