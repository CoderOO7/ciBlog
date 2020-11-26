<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at'] ?> in
    <strong><?php echo $post['created_at'] ?></strong>
</small><br>
<img class="post-thumb thumbnail" src="<?php echo site_url('assets/images/posts/' . $post['post_image']); ?>" alt="Post Image"><br><br>
<div class="post-body">
    <?php echo $post['body']; ?>
</div>

<hr>
<div class="btn-toolbar">
    <a class="col-md-1 btn btn-secondary mr-1" href="<?php echo site_url('posts/edit/' . $post['slug']) ?>">Edit</a>
    <a class="col-md-1 btn btn-danger" href="<?php echo site_url('posts/delete/' . $post['id']) ?>">Delete</a>
</div>