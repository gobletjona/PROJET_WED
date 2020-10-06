<?php
namespace App\Controleurs\UsersControleur;




function logoutAction(){
  // Je tue la variable de session 'user'
  unset($_SESSION['user']);
  // Je redirige vers le form connexion
  header('location: ' . BASE_URL_PUBLIC . 'users/login');
}
