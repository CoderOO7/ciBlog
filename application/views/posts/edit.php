<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update') ?>
  <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
  <div class="form-group">
    <label for="titleInput">Title</label>
    <input type="text" class="form-control" id="titleInput" name="title" placeholder="Add Title" value="<?php echo $post['title'] ?>">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea class="form-control" id="ck-editor" name="body" placeholder="Add Body"><?php echo $post['body'] ?></textarea>
  </div>
  <div class="form-group">
    <label>Category</label>
    <select name="category_id" class="form-control">
      <?php foreach ($categories as $category) : ?>
        <option value="<?php echo $category['id'] ?>">
          <?php echo $category['name']; ?>
        </option>
      <?php endforeach; ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>