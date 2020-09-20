<?php
/*
./app/vues/posts/index.php

 */
 ?>
<div class="blog_left_sidebar">
  <?php foreach ($posts as $post): ?>
    <article class="blog_item">
        <div class="blog_item_img">
            <img class="card-img rounded-0" src="../www/assets/img/blog/<?php echo $post['image']; ?>" alt="<?php echo $post['title']; ?>">
            <a href="#" class="blog_item_date">
                <h3>15</h3>
                <p>Jan</p>
            </a>
        </div>

        <div class="blog_details">
            <a class="d-inline-block" href="?postId=<?php echo $post['id']; ?>">
                <h2><?php echo $post['title']; ?></h2>
            </a>
            <p><?php echo $post['content']; ?></p>

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
