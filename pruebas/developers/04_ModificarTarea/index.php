<html>
  <head>
    <title>Alta de usuario</title>
  </head>

  <body>
    <form action="procesarModificarTarea.phpp" method="post">
      Posición usuario:<input name="posicionUser" type="number" min="0"><br>
      <input name="nombreDato" type="hidden" value="tareas">
      Campo a modificar:<input name="posicionDato" type="text">titulo, descripcion, estado, hora_inicio, hora_fin<br>
      Nuevo texto:<input name="newDato" type="text"><br>
      <input type="submit" value="Enviar">
    </form>
  </body>

</html>





