<?php

    class Inventario extends DB{


        public function request(){
            try{
                $stm=parent::conectar()->prepare("SELECT * FROM productos INNER JOIN tipo_producto ON fk_tipo_producto = tipo_producto.id_tipo_producto");
                $stm->execute();
                return $stm->fetchALL(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
        public function ConsultaTipoProducto(){
            try{
                $stm = parent::conectar()->prepare("SELECT * FROM Tipo_producto");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
        public function store($fk_tipo_producto,$producto,$cantidad,$precio){
            try{
              $stm=parent::conectar()->prepare("INSERT INTO productos (fk_tipo_producto,producto,cantidad,precio)VALUES(?,?,?,?)");
              $stm->bindParam(1,$fk_tipo_producto,PDO::PARAM_STR);
              $stm->bindParam(2,$producto, PDO::PARAM_STR);
              $stm->bindParam(3,$cantidad,PDO::PARAM_STR);
              $stm->bindParam(4,$precio,PDO::PARAM_STR);
              $stm->execute();
            }catch(Exception $e){
               die($e->getMessage());
            }
        }
    

    }

?>