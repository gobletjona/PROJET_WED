<?php

/*
./app/routeur.php
ROUTEUR PRINCIPALE
*/


// DETAILS D'UN POST
// PATTERN: /index.php?postId=X
// CTRL: postsControleur
// ACTION: show
if (isset($_GET['postId'])) :
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\PostsControleur\showAction($connexion, $_GET['postId']);


// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: postsControleur
// ACTION: index
else :
include_once '../app/controleurs/postsControleur.php';
\App\Controleurs\PostsControleur\indexAction($connexion, [
  'orderBy' => 'created_at',
  'orderSens' => 'DESC'
]);

endif;
