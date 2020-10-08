
<?php
/*
  ./app/vues/categories/addForm.php
  variable disponibles
  - $categorie ARRAY(id, titre, slug)
 */
?>

  <h1><?php echo TITRE_CATEGORIES_EDITFORM; ?></h1>
  <a href="categories">Retour vers la liste des catégories</a>

  <form action="categories/edit/<?php echo $categorie['id']; ?>" method="post">
    <div>
      <label for="name">Titre</label>
      <input type="text" name="name" value="<?php echo $categorie['name']; ?>">
    </div>

      <input type="submit" />
    </div>
  </form>
