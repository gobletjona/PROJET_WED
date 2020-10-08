<?php
/*
  ./app/routeurs/user.php
 */

include '../app/controleurs/categoriesControleur.php';

switch ($_GET['categories']) {

  case 'edit':
  // MODIFICATION D'UNE CATEGORIES: UPDATE
  // PATTERN: index.php?categories=edit&id=x
  // CTRL: catgeoriesControleur
  // ACTION: edit
    \App\Controleurs\CategoriesControleur\editAction($connexion, [
      'id' => $_GET['id'],
      'name' => $_POST['name']


    ]);
    break;

  case 'editForm':
  // MODIFICATION D'UNE CATEGORIES
  // PATTERN: index.php?categories=editForm&id=x
  // CTRL: catgeoriesControleur
  // ACTION: editForm
    \App\Controleurs\CategoriesControleur\editFormAction($connexion, $_GET['id']);
    break;

  case 'delete':
  // SUPPRESSION CATEGORIES
  // PATTERN: index.php?categories=delete&id=x
  // CTRL: catgeoriesControleur
  // ACTION: delete
    \App\Controleurs\CategoriesControleur\deleteAction($connexion, $_GET['id']);
    break;

  case 'add':
  // AJOUT CATEGORIES: INSERT
  // PATTERN: index.php?categories=add
  // CTRL: catgeoriesControleur
  // ACTION: add
    \App\Controleurs\CategoriesControleur\addAction($connexion, [
      'name' => $_POST['name']
    ]);
    break;

  case 'addForm':
  // AJOUT CATEGORIES: FORMULAIRE
  // PATTERN: index.php?categories=addForm
  // CTRL: catgeoriesControleur
  // ACTION: addForm
    \App\Controleurs\CategoriesControleur\addFormAction();
    break;


  case 'index':
  // LISTE DES CATEGORIES
  // PATTERN: index.php?categories=index
  // CTRL: catgeoriesControleur
  // ACTION: index
    \App\Controleurs\CategoriesControleur\indexAction($connexion);
    break;

    default:
    break;


}
