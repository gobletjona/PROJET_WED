<?php
/*
  ./app/routeurs/users.php
  ROUTE DES USERS
  $_GET['users']
 */

include_once '../app/controleurs/usersControleur.php';

switch ($_GET['users']) {
  case 'loginForm':
    // FORMULAIRE DE CONNEXION AU BACKOFFICE
    // PATTERN: ?users=login
    // CTRL: usersControleur
    // ACTION: loginForm
    \App\Controleurs\UsersControleur\loginFormAction();
    break;
    case 'loginCheck':
      // TRAITEMENT DU FORMULAIRE DE CONNEXION AU BACKOFFICE
      // PATTERN: ?users=loginCheck
      // CTRL: usersControleur
      // ACTION: loginCheck
      \App\Controleurs\UsersControleur\loginCheckAction($connexion);
      break;

  default:
    // Je charge un 404
    break;
}
