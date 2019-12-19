<?php require_once ('views/layout/head.php')?>
<body class="fondo" background="assets/all/img/fon2.jpg"> 
<?php  require_once ('views/layout/nav.php')  ?>

<?php if(@$_REQUEST['error']){ ?>
<div class=" container stiloletra2">
        <div class="row">
            <div class="four wide column"></div>
            <div class="eight wide center aligned column">
                <div class="ui red inverted segment">
                        <h2>Correo o Contraseña Incorrecta</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>
<form action="?c=Login&m=auth" method="post"">
    <div  class="container stiloletra2">
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
</form>


</body>