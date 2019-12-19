<?php
 class LoginController extends Login{
    private $usuario;

    public function index(){
        $title = "Login";
        require_once('views/login/login.php');
    }

    public function __construct(){
        try{
            $this->usuario = new Usuario();
        }catch(Exception $e){

        }
    }

    public function auth(){
        
        $email = $_POST['email'];
        $password = $_POST['password'];

        $usuario = $this->usuario->requestEmail($email, $password);
        if($email == @$usuario->correo && $password == @$usuario->password_user){
            $_SESSION['user']=$usuario;
            header('location: ?c=Inventario&m=index');
        }else{
            header('location: ?c=Login&m=index&error=error');
        }
    }

    public function destroy(){
        session_destroy();
        header('location:?c=Login&m=login');
        exit;

    }
 }
?>