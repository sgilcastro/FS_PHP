<?php
require_once("layout/header.php");
?>
<link rel="stylesheet" href="vista/css/estilos.css">

<h1 class="text-center">NUEVO</h1>

<form action="" method="get">
    <input type="text" placeholder="INGRESE NOMBRE:" name="nombre"> </imput><br>
    <input type="text" placeholder="INGRESE PRECIO:" name="precio"> </imput><br>
    <input type="submit" pclass="btn" name="btn" value="GUARDAR"> </imput><br>
    <input type="hidden" name="m" value="guardar"> </imput><br>
</form>

<?php
require_once("layout/footer.php");
?>