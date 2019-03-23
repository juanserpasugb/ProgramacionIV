<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo Pagina 2 Librerias</title>
  </head>
  <body>
      <?php  include("libreria.php") ?>
      <?php  CabeceraPagina (); ?>
      Esta es otra pagina <br><br>
      completamente distinta<br><br>
      pero comparte el pie y la cabecera de la otra.<br><br>
      <?php PiePagina(); ?>
  </body>
</html>
