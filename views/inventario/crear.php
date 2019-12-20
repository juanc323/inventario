
<?php require_once ('views/layout/head.php')?>
<body class="fondo" background="assets/all/img/fon3.jpg"> 
<?php  require_once ('views/layout/nav.php')  ?>



<div class="col-md-4 col-md-offset-3 stiloletra2">
    <form action="?c=Inventario&m=crear" method="post">
        <label for="">Tipo Producto</label>
            <select name="fk_tipo_producto" class="form-control">
                <option value="">Elija una opcion</option>                            
                <?php 
                $t_productos = parent::ConsultaTipoProducto();
                foreach($t_productos as $t_producto){ ?>
                <option value="<?php echo $t_producto->id_tipo_producto; ?>"><?php echo $t_producto->tipo_producto; ?></option>
            <?php } ?>
            </select>
        

            <div class="form-group">
                <label for="name">Nombre de Producto</label>
                <input type="text" class="form-control" name="producto" id="producto">
            </div>
            
            <div class="form-group">
                <label for="name">Cantidad</label>
                <input type="number" class="form-control" name="cantidad" id="cantidad">
            </div>

            <div class="form-group">
                <label for="name">Precio</label>
                <input type="number" class="form-control" name="precio" id="precio">
            </div>

                <button type="submit" class="btn btn-success">Crear</button>
                <a class="btn btn-info" href="?c=Inventario&m=index">volver</a>
            
        

    </form>
</div>
</body>