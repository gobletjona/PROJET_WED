<?php

namespace App\Modeles\AuthorsModele;


function findOneById (\PDO $connexion, int $id) :array {
  $sql = "SELECT *
          FROM authors
          WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_STR);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}
