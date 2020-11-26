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

<hr>
<aside>
    <section>
        <h3>Comments</h3>
        <?php if($comments): ?>
            <?php foreach($comments as $comment): ?>
                <div class="card card-body bg-light mb-3">
                    <h5><?php echo $comment['body'];?> <em>[By <strong><?php echo $comment['name']?></strong>]</em></h5>
                </div>
            <?php endforeach;?>
        <?php else:?>
            <p>No Comments To Display</p>
        <?php endif;?>
    </section>
    <section>
        <h3>Add Comment</h3>
        <?php echo validation_errors(); ?>
        <?php echo form_open('comments/create/'.$post['id'])?>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Body</label>
                <textarea name="body" class="form-control"></textarea>
            </div>
            <input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
</aside>