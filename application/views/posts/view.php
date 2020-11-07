<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at'] ?> in
    <strong><?php echo $post['created_at'] ?></strong>
</small><br>
<img class="post-thumb thumbnail" src="<?php echo site_url('assets/images/posts/' . $post['post_image']); ?>" alt="Post Image"><br><br>
<div class="post-body">
    <?php echo $post['body']; ?>
</div>

<hr>
<a class="btn btn-secondary pull-left" href="<?php echo site_url('posts/edit/' . $post['slug']) ?>">Edit</a>
<?php echo form_open('posts/delete/' . $post['id']) ?>
    <input type="submit" value="delete" class="btn btn-danger">
</form>