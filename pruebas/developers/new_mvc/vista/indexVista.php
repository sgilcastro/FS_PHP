<?php
require_once("layout/header.php");

?>
    <link rel="stylesheet" href="vista/css/estilos.css">
<a href="index.php?m=nuevo" class="btn">NUEVO</a>
<table>
    <tr>
        <TD>ID</TD>
        <TD>NOMBRE</TD>
        <TD>ACCIÓN</TD>
    </tr>
    
    <tbody>
        <?php
            if(!empty($dato)):   
                foreach($dato as $key => $value)
                    foreach($value as $v):?>
                    
                    <TR>
                        <TD><?php echo $v['id'] ?> </TD>
                        <TD><?php echo $v['nombre'] ?> </TD>
                        <TD> 
                            <a class="btn" href="index.php?m=editar&id=<?php echo $v['id']?>"> EDITAR </a>
                            <a class="btn" href="index.php?m=eliminar&id=<?php echo $v['id']?>" onClick="return confirm('¿ESTA SEGURO?'); false"> ELIMINAR </a>
                        </TD>
                    </TR>

                    <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td COLSPAN="3">no hay registros</td>
                </tr>

                <?php endif;?>
    </tbody>

</table>

<?php
require_once("layout/footer.php");
?>