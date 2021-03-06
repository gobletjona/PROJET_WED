<?php
/*
  ./app/vues/posts/index.php
  Variables disponibles:
    - $post: ARRAY (ARRAY(id, title, created_at, content, image, author_id, categorie_id))
 */
 ?>

<!-- LISTE DES POSTS -->

 <div class="blog_left_sidebar">

   <?php
     foreach ($posts as $post):
     $created_at = strtotime($post['created_at']);
   ?>
     <article class="blog_item">
         <div class="blog_item_img">
             <img class="card-img rounded-0" src='assets/img/blog/<?php echo $post['image']; ?>' alt="">
             <a href="posts/<?php echo $post['id']; ?>/<?php echo Noyau\Fonctions\slugify($post['title']); ?>" class="blog_item_date">
                 <h3><?php echo date('d', $created_at); ?></h3>
                 <p><?php echo date('M', $created_at); ?></p>
             </a>
         </div>
         <div class="blog_details">
             <a class="d-inline-block" href="posts/<?php echo $post['id']; ?>/<?php echo Noyau\Fonctions\slugify($post['title']); ?>">
                 <h2><?php echo $post['title']; ?></h2>
             </a>
             <p><?php echo $post['content']; ?></p>
             <!--TAGS LIST -->
             <?php
               include_once '../app/controleurs/tagsControleur.php';
               \App\Controleurs\TagsControleur\indexByPostIdAction($connexion, $post['id']);
             ?>
         </div>
     </article>

    <?php endforeach; ?>

     <nav class="blog-pagination justify-content-center d-flex">
       <ul class="pagination">
             <li class="page-item">
                 <a href="#" class="page-link" style="width: auto; padding: 0 1em;">More posts</a>
             </li>
       </ul>
     </nav>

 </div>
