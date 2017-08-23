<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo de post</title>
  </head>
  <body>

 <form method="post">
 <p>Introduzca su nombre: <input type="text" name="name" /></p>
 <p>Introduzca su apellido:<input type="text" name="apellido" /></p>
 <p><input type="submit" /></p>
 </form>

 Hola:  <?php isset($_POST["name"]) ? print $_POST["name"] : ""; ?><br>
 Tus apellido són:: <?php isset($_POST["apellido"]) ? print $_POST["apellido"] : ""; ?>

  </body>
</html>
