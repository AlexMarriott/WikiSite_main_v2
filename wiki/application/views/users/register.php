
<h2><?php echo $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('users/register'); ?>
<div class="row center-block">
    <div class="col-md-4 col-md-offset-4">
        <h1 class="text-center"><?= $title; ?></h1>
        <div class="form-group">
            <label>User Name</label>
            <input type="text" class="form-control" name="user_name" placeholder="User Name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email_address" placeholder="Email Address">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="account_password" placeholder="Enter Password">
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" class="form-control" name="account_password2" placeholder="Confirm Password">
        </div>
        <div class="form-group">
            <label for="picture-upload">File input</label>
            <p class="help-block">Upload a user image!</p>
            <input type="file" id="picture-upload" name="userfile" size="20">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>
</div>
<?php echo form_close(); ?>
