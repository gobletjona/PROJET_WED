
<?php
/*
  ./app/vues/categories/addForm.php
 */
?>

  <h1>Ajout d'une catégories</h1>
  <a href="categories">Retour vers la liste des catégories</a>

  <form action="categories/add/insert" method="post">
    <div>
      <label for="name">Titre</label>
      <input type="text" name="name" value="name">
    </div>

      <input type="submit" />
    </div>
  </form>
