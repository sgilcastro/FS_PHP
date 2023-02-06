<html>
  <head>
    <title>Alta de Tarea</title>
  </head>

  <body>
    <form action="procesarCrearTarea.php" method="post">
    titulo:<input name="titulo" type="text"><br>
    descripcion:<textarea name="descripcion" type="text"></textarea><br>
    estado:<select name="estado">
    <option selected>Nueva</option>
    <option >En curso</option>
    <option>Finalizada</option>
    </select><br>
    hora_inicio:<input name="hora_inicio" type="datetime-local"><br>
    hora_fin:<input name="hora_fin" type="datetime-local"><br>
    <input type="submit" value="Enviar">
    </form>
  </body>

</html>





