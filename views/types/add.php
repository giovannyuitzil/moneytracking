<div class="row">
<div class="col-md-6 col-sm-12 col-xs-12">
    <h4>Add user type</h4>
    <form action="<?php echo APP_URL."/types/add"; ?>" method="POST">
        <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control" type="text" id="name" name="name">
        </div>
        <input class="btn btn-success" type="submit" value="Save">
    </form>
</div>