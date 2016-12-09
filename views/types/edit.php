<div class="row">
<div class="col-md-6 col-sm-12 col-xs-12">
    <h4>Edit type user</h4>
    <form action="<?php echo APP_URL."/types/edit"; ?>" method="POST">
    	<input type="hidden" name="id" value="<?php echo $type["id"]; ?>">
         <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control" type="text" name="name" value="<?php echo $type["name"]; ?>">
        </div>
        <input class="btn btn-success" type="submit" value="Save">
    </form>
</div>