<?php
require_once '../model/PetDao.php';
 
class PetController {

    public function listarTodos() {
        $pet = new Pet();
        return $pet->getAll();
    }
    
}

?>