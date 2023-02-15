<html>
  <head>
    <title>Cuenta</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body>
    <!-- 
        <form action="procesarMovimiento.php" method="post">
    Nombre:<input name="nombreCliente" type="text"><br>
    Apellidos:<input name="apellidoCliente" type="text"><br>
    Número de cuenta:<input name="numCuenta" type="number"></input><br>
    <select name="accion">
    <option value="ingresar" selected>ingresar</option>
    <option value="retirar" >retirar</option>
    </select><br>
    cantidad en euros:<input name="amount" type="number"><br>
    <input type="submit" value="Enviar">
    </form>
-->
<div class="w-full max-w-xs self-stretch flex-column ">
  <form action="procesarMovimiento.php" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="nombreCliente">
      Nombre
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
      id="nombreCliente" 
      type="text" 
      name="nombreCliente">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="apellidoCliente">
      Apellidos:
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
      id="apellidoCliente" 
      type="text" 
      name="apellidoCliente">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="numCuenta">
      Número de cuenta:
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
        id="numCuenta" 
        name="numCuenta" 
        type="number">
    </div>
       <div class="mb-6">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="accion">
     ¿Qué quieres hacer?
      </label>
    <select class="shadow border rounded  w-full  py-2 px-3 text-gray-700 mb-3 leading-tight focus:shadow-outline" 
    name="accion">
   
    <option value="ingresar" selected >ingresar</option>
    <option value="retirar">retirar</option>
    </select><br>
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="amount">
      Cantidad en euros:
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
        id="amount"
        name="amount" 
        type="number">
    </div>

    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
        Enviar
      </button>
    </div>
  </form>
  <p class="text-center text-gray-500 text-xs">
    &copy;2023 Susana Gil. All rights reserved.
  </p>
</div>


  </body>








</html>