<?php
/*
./app/routeurs/usersRouteur.php
 */
use \App\Controleurs\Users;
include_once '../app/controleurs/usersControleur.php';

  switch ($_GET['users']) :
    case 'loginForm':
      // FORMULAIRE DE LOGIN
      // PATTERN: /index.php?users=loginForm
      // CTRL: usersControleur
      // ACTION: loginForm
      Users\loginFormAction($connexion);
      break;

    endswitch;
