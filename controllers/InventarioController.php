<?php


class InventarioController extends Inventario {

    public function index(){
        require_once ('views/inventario/inventario.php');
    }
    public function create(){
        require_once ('views/inventario/crear.php');
    }
    public function createProducto(){
        require_once ('views/inventario/crearTipoProducto.php');
    }
    public function actualizar(){
        require_once ('views/inventario/editar.php');
    }
    public function creartp(){
        parent::insert($_POST['tipo_producto']);
        header('location:?c=Inventario&m=index');
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
    public function edit(){
        $id= $_POST['id'];
        $fk_tipo_producto= $_POST['fk_tipo_producto'];
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        parent::update($fk_tipo_producto,$producto,$cantidad,$precio,$id);
        header('location:?c=Inventario&m=index');
      }

    public function destroy(){
        $id = $_REQUEST['id'];
        parent::eliminar($id);
        header('location:?c=inventario&m=index');
    }
    


}










?>