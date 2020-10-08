<?php
/*
  ./app/routeurs/user.php
 */

include '../app/controleurs/postsControleur.php';

switch ($_GET['posts']) {

  case 'index':
  // LISTE DES POSTS
  // PATTERN: index.php?posts=index
  // CTRL: postsControleur
  // ACTION: index
    \App\Controleurs\postsControleur\indexAction($connexion);
    break;

    default:
    break;


}
