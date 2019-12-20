<?php require_once ('views/layout/head.php')?>
<body class="fondo" background="assets/all/img/fon3.jpg"> 
<?php  require_once ('views/layout/nav.php')  ?>


    <div class="col-md-4 col-md-offset-3 stiloletra2">
        <form action="?c=Inventario&m=creartp" method="post">    
            <div class="form-group">
                <label for="name">Tipo_producto</label>
                <input type="text" class="form-control" name="tipo_producto" id="tipo_producto">
            </div>
            <button type="submit" class="btn btn-success">Crear</button>
            <a class="btn btn-info" href="?c=Inventario&m=index">volver</a>
        </form>
    </div>

</body>