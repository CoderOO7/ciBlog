<h2><?= $title; ?></h2>

<?php echo validation_errors();?>

<?php echo form_open('posts/create')?>
  <div class="form-group">
    <label for="titleInput">Title</label>
    <input type="text" class="form-control" id="titleInput" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label for="bodyTextArea">Body</label>
    <textarea class="form-control" id="ck-editor" name="body" row="5" placeholder="Add Body"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>