<?php
namespace App\Controleurs\PostsControleur;
use \App\Modeles\PostsModele;
use \App\Modeles\AuthorsModele;

/**
 * [indexAction description]
 * @params  PDO    $connexion [description]
 */
function indexAction(\PDO $connexion, array $params = []) {
  // Je mets dans $posts la liste des 10 derniers posts que je demande au modèle
    include_once '../app/modeles/postsModele.php';
    $posts = PostsModele\findAll($connexion);

  // Je charge la vue posts/index dans $content
    GLOBAL $title, $content;
    $title = TITRE_POSTE_INDEX;
    ob_start();
      include '../app/vues/posts/index.php';
    $content = ob_get_clean();
}



function showAction(\PDO $connexion, int $id) {
  // Je demande le post au modele
    include_once '../app/modeles/postsModele.php';
    $post = PostsModele\findOneById($connexion, $id);

  // Je met dans $author les infos de l'auteur du post que je demande au authorsModele
    include_once '../app/modeles/authorsModele.php';
    $author = AuthorsModele\findOneById($connexion, $post['author_id']);

  // Je charge la vue show dans $content
    GLOBAL $title, $content;
    $title = $post['title'];
    ob_start();
      include '../app/vues/posts/show.php';
    $content = ob_get_clean();
}
