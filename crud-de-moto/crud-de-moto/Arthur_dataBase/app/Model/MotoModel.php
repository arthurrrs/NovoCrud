
<?php

class MotoModel {

    public $id, $Marca, $nomeMoto, $Quilometros, $Ano;

    public $rows; 
    public function save()
    {
        include 'DAO/MotoDAO.php'; 

        $dao = new MotoDAO();


        if (empty($this->id)) {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        include 'DAO/MotoDAO.php';

        $dao = new MotoDAO();

        $this->rows = $dao->select();
    }


    public function getById(int $id)
    {
        include "DAO/MotoDAO.php";

        $dao = new MotoDAO();

        $obj = $dao->selectByid($id);

        return ($obj) ? $obj : new MotoModel();

     
    }


    public function delete(int $id)
    {
        include 'DAO/MotoDAO.php';

        $dao = new MotoDAO();
        $dao->delete($id);
    }
}
