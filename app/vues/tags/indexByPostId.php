<?php
/*
./app/vues/tags/indexByPostId.php
  $tags: ARRAY(id, name)
 */
?>

  <ul class="blog-info-link">
    <?php foreach ($tags as $tag): ?>
      <li><a href="#"><i class="fa fa-user"></i><?php echo $tag['name']; ?></a></li>
      <?php endforeach; ?>
  </ul>
