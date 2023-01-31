<?php
require_once("layout/header.php");

?>
<a href="index.php/?m=nuevo" class="btn">NUEVO</a>

<h1 class="text-center">NUEVO</h1>
<form action="" method="get">
    <imput type="text" placeholder="INGRESE NOMBRE:" name="nombre"> <br>
    <imput type="text" placeholder="INGRESE PRECIO:" name="precio"> <br>
    <imput type="submit" pclass="btn" name="m" value="GUARDAR"> <br>
</form>

<?php
require_once("layout/footer.php");

//var_dump($dato);



?>