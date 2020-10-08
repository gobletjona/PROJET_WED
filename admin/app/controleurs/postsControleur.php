<?php
/*
  ./app/controleurs/categoriesControleur.php
 */
namespace App\Controleurs\PostsControleur;

function indexAction(\PDO $connexion) {
  // Je mets la liste des categories dans $categories
    include_once '../app/modeles/postsModele.php';
    $posts = \App\Modeles\PostsModele\findAll($connexion);
  // Je charge la vue index dans $content
    GLOBAL $content, $title;
    $title = TITRE_POSTS_INDEX;
    ob_start();
      include '../app/vues/posts/index.php';
    $content = ob_get_clean();
}
