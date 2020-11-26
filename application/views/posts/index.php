<h2><?= $title ?></h2><br>
<?php foreach ($posts as $post) : ?>
    <section class="post">
        <h3><?php echo $post['title'] ?></h3>
        <div class="row">
            <div class="col-md-3">
                <img class="post-thumb thumbnail" src="<?php echo site_url('assets/images/posts/' . $post['post_image']); ?>" alt="Post Image">
            </div>
            <div class="col-md-9">
                <small class="post-date">Posted on: <?php echo $post['created_at'] ?> in
                    <strong><?php echo $post['name'] ?></strong>
                </small>
                <p><?php echo word_limiter($post['body'], 60); ?></p>
                <a class="btn btn-secondary" href="<?php echo site_url('posts/' . $post['slug']); ?>">Read more</a><br><br><br>
            </div>
        </div>
    </section>
<?php endforeach; ?>