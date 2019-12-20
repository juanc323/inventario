<?php


class InventarioController extends Inventario {

    public function index(){
        require_once ('views/inventario/inventario.php');
    }
    public function create(){
        require_once ('views/inventario/crear.php');
    }
    public function actualizar(){
        require_once ('views/inventario/editar.php');
    }


    public function crear(){


        header("location:?c=inventario&m=create");
        parent::store(
        $_POST['fk_tipo_producto'],
        $_POST['producto'],
        $_POST['cantidad'],
        $_POST['precio']
        
        );
}


}






?>