<?php

class MotoDAO
{

   private $conexao;

   public function __construct()
   {
      $dsn = 'mysql:host=localhost:3306;dbname=db_mvc_moto';

      $this->conexao = new PDO($dsn, 'root', 'root');
   }

   public function insert(MotoModel $model)
   {

      $sql = "INSERT INTO moto (Marca, nomeMoto, Quilometros, Ano) VALUE(?, ?, ?, ?)";

      $stmt = $this->conexao->prepare($sql);

      $stmt->bindValue(1, $model->Marca);
      $stmt->bindValue(2, $model->nomeMoto);
      $stmt->bindValue(3, $model->Quilometros);
      $stmt->bindValue(4, $model->Ano);

      $stmt->execute();
   }

   public function update(MotoModel $model)
   {
      $sql = "UPDATE moto SET Marca=?, nomeMoto=?, Quilometros=?, Ano=? WHERE id=? ";

      $stmt = $this->conexao->prepare($sql);

      $stmt->bindValue(1, $model->Marca);
      $stmt->bindValue(2, $model->nomeMoto);
      $stmt->bindValue(3, $model->Quilometros);
      $stmt->bindValue(4, $model->Ano);
      $stmt->bindValue(5, $model->id);

      $stmt->execute();
   }

   public function selectByid(int $id)
   {
      include_once 'Model/MotoModel.php';

      $sql = "SELECT *FROM moto WHERE id = ?";

      $stmt = $this->conexao->prepare($sql);
      $stmt->bindValue(1, $id);

      $stmt->execute();


      return $stmt->fetchObject("MotoModel");
   }



   public function select()
   {

      $sql = "SELECT * FROM moto";

      $stmt = $this->conexao->prepare($sql);
      $stmt->execute();

      return $stmt->fetchAll(PDO::FETCH_CLASS);
   }

   public function delete(int $id)
   {
      $sql = "DELETE FROM moto WHERE id = ?";

      $stmt = $this->conexao->prepare($sql);
      $stmt->bindValue(1, $id);
      $stmt->execute();
   }
}
