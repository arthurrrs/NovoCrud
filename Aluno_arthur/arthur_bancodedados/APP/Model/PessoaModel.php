<?php

class PessoaModel {
    public $id, $nome, $cpf, $data_nascimento;

    public $rows;

    public function save() {
        include 'DAO/PessoaDAO.php'; 

        $dao = new PessoaDAO();

      

        if (empty($this->id)) {
            $dao->insert($this);
            
        } else {
            $dao->update($this);
        }
    }

    public function getAllRows() {
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();

        $this->rows = $dao->select();
    }


    public function getById(Int $id){
        include "DAO/PessoaDAO.php";

        $dao = new PessoaDAO();

        
        $obj = $dao->selectById($id);
        return ($obj) ? $obj : new PessoaModel();
        
        //if ($obj) {
         //   return $obj;
        //} else {
         //   return new PessoaModel();
        // }


        
    }


    public function delete(int $id) {
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();
        $dao->delete($id);
        


    }


}

?>