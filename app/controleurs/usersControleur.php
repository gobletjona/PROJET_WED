<?php
namespace App\Controleurs\Users;
use \App\Modeles\User;


/**
 * [indexAction description]
 * @params  PDO    $connexion [description]
 */
function loginFormAction(\PDO $connexion) {

  // Je charge la vue loginForm dans $content
    GLOBAL $title, $content;
    $title = TITRE_USERS_LOGINFORM;
    ob_start();
      include '../app/vues/users/loginForm.php';
    $content = ob_get_clean();
}
