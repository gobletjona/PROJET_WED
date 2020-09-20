<?php

namespace App\Modeles\PostsModele;

function findAll (\PDO $connexion) :array {
  $sql = "SELECT *
          FROM posts
          ORDER BY created_at DESC
          LIMIT 5;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function findOneById (\PDO $connexion, int $id) :array {
  $sql = "SELECT *
          FROM posts p
          WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_STR);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}
