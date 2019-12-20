
<?php require_once ('views/layout/head.php')?>
<body class="fondo" background="assets/all/img/fon2.jpg"> 
<?php  require_once ('views/layout/nav.php')  ?>

    <div class="col-md-6 col-md-offset-3 stiloletra2">
        <form action="?c=Inventario&m=edit" method="post">
        <?php 
            $id = $_REQUEST['id'];
            $r = parent::request();
        ?>
        <input type="hidden" value="<?php echo $id ?>" name="id"  class="form-control" readonly>
        <?php foreach($r as $a){ 
            
            if($id == $a->id_producto){ ?>
                                
                <label for="">Tipo Producto</label>
                <select name="fk_tipo_producto" id="" class="form-control" required>
                    
                    <?php foreach(parent::consultaTipoProducto() as $r ) { ?>
                    
                    <option value="<?php echo $r->id_tipo_producto?>"><?php echo $r->tipo_producto ?></option>
                    
                    <?php } ?>
                </select>
                <br>

                <label for="">Nombre producto</label>
                
                <input type="text" name="producto" class="form-control" value="<?php echo $a->producto?>">
                
                <label for="">Cantidad</label>

                <input type="number" name="cantidad" class="form-control" value="<?php echo $a->cantidad?>">

                <label for="">Precio</label>

                <input type="number" name="precio" class="form-control" value="<?php echo $a->precio?>">
                <br>
                    
                <?php } } ?>
                <br>
                <button class="btn btn-success"> Actualizar</button>
                <button class="btn btn-danger" ><a style="text-decoration:none; color:black;"  href="?c=Inventario&m=index">Cancelar</a></button>
                <br> <br>
                <a href="?c=Inventario&m=index" style="text-decoration:none;">volver</a>
        </form>
    </div>    
</body>