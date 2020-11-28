<div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-3 pt-3 pb-3 pb-5">
        <!-- Show validation errors if any occur -->
        <div class="row">
            <?php if (validation_errors()) : ?>
                <div class="col-12">
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors() ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <h2><?= $title ?></h2>
        <hr>
        <?php echo form_open(site_url('register')) ?>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="">UserName</label>
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-12 col-sm-8 text-right">
                    <a href="<?php echo site_url('login') ?>">Already have an account?</a>
                </div>
            </div>
        </php echo form_close();>
    </div>
</div>