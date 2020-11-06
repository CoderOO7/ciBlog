<h2><?= $title; ?></h2>

<?php echo validation_errors();?>
<?php echo form_open('posts/create')?>
  <div class="form-group">
    <label for="titleInput">Title</label>
    <input type="text" class="form-control" id="titleInput" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label for="bodyTextArea">Body</label>
    <textarea type="text" class="form-control" id="bodyTextArea" name="body" placeholder="Add Body"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>