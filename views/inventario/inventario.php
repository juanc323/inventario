<?php require_once ('views/layout/head.php')?>
<body background="assets/all/img/fon1.jpg"> 
<?php  require_once ('views/layout/nav.php')  ?>




<div class="col-md-8 col-md-offset-1 espacio2">
<a class="btn btn-warning" href="?c=Inventario&m=create">Crear nuevo Producto</a>
<a class="btn btn-warning" href="?c=Inventario&m=createProducto">Crear tipo Producto</a>
<br><br>
    <table class="table table-bordered">
        <tr class="stiloletra3">
          
            <th>TIPO_PRODUCTO</th>
            <th>NOMBRE_PRODUCTO</th>
            <th>CANTIDAD</th>
            <th>PRECIO</th>
            <th>EDITAR</th>
            <th>ELIMINAR</th>
        </tr>
        <?php  foreach(parent::request() as $r) { ?>
        
        <tr class="stiloletra3">
            <td><?php echo $r->tipo_producto ?></td>
            <td><?php echo $r->producto ?></td>
            <td><?php echo $r->cantidad ?></td>
            <td><?php echo $r->precio ?></td>
            <td><a href="?c=Inventario&m=actualizar&id=<?php echo $r->id_producto ?>"class="btn btn-info" >Editar</a></td>
            <td><a href="?c=inventario&m=destroy&id=<?php echo $r->id_producto; ?>" class="btn btn-danger ">Eliminar</a></td>
        <?php  } ?>

    </table>
</div>
</body>