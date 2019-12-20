<?php require_once ('views/layout/head.php')?>
<body class="fondo" background="assets/all/img/fon3.jpg"> 
<?php  require_once ('views/layout/nav.php')  ?>

<div class="col-md-6 col-md-offset-3 stiloletra2">
   
<form action="?c=Login&m=auth" method="post"">
<?php if(@$_REQUEST['error']){ ?>

    <div class=" container stiloletra2">

        <h2>Correo o Contraseña Incorrecta</h2>
    <?php }?>
    
    
        
            <h1 >LOGIN</h1>
            <br>
            <label for=""><b>Correo</b></label>
            <br> 
            <input type="email" placeholder="&#128272; usuario" name="email" required class="form-control">   
            <label for=""><b>Contraseña</b></label>
            <br>
            <input  type="password" placeholder="&#128273; contraseña" name="password"  required class="form-control">
            <br>
            <input class="btn btn-info" type="submit" value=ingresar>
    </div>    
</div>
</form>


</body>