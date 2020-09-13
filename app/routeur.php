<?php

/*
./app/routeur.php
ROUTEUR PRINCIPALE
*/


// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: postsControleur
// ACTION: index
include_once '../app/controleurs/postsControleur.php';
\App\Controleurs\PostsControleur\indexAction($connexion);
