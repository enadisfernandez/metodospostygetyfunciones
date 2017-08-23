<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>isset</title>
  </head>
  <body>
    <?php
      $jugadores = array ('portero' => 'Casillas', 'Defensa' => 'Pepe');
    if (isset($jugadores['portero']))
    	{
    	echo "Variable de array definida!!!";
    	}else
    		{
    		echo "Variable de array NO definida!!!";
    		}
     ?>
  </body>
</html>
