<?php
class Usuario extends DB{

    public function stored($nombres, $apellidos, $correo, $password, $date){
        try{
            $str = parent::conectar()->prepare("INSERT INTO usuario(nombres,apellidos,correo,password_user, fecha_creacion) VALUES ('$nombres', '$apellidos', '$correo', '$password', '$date') ");
            $str->execute();
        }catch(Exception $e){
            die("error".$e->getMessage());
        }
    }

    public function requestEmail($email, $password){
        try{
            $str = parent::conectar()->prepare('SELECT * FROM usuarios WHERE correo = ? AND password_user = ? ');
            $str->bindParam(1,$email,PDO::PARAM_STR);
            $str->bindParam(2,$password,PDO::PARAM_STR);
            $str->execute();
            return $str->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die("error".$e->getMessage());
        }
    }
}
?>