<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create') ?>
  <div class="form-group">
    <label for="titleInput">Title</label>
    <input type="text" class="form-control" id="titleInput" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea class="form-control" id="ck-editor" name="body" row="5" placeholder="Add Body"></textarea>
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
  <div class="form-group">
    <label>Upload Image</label>
    <input type="file" class="form-control-file" name="post_image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>