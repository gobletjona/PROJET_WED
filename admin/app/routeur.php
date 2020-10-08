<?php
/*
  ./app/routeur.php
 */

 if (isset($_GET['categories'])) :
  include_once '../app/routeurs/categories.php';

 elseif (isset($_GET['user'])):
   include_once '../app/routeurs/user.php';

   elseif (isset($_GET['posts'])):
     include_once '../app/routeurs/posts.php';
 endif;
