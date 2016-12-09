<div class="row">
<div class="col-md-6 col-sm-12 col-xs-12">
    <h4>Add user</h4>
    <form action="<?php echo APP_URL."/users/add"; ?>" method="POST">
        <div class="form-group">
            <label for="username">Username:</label>
            <input class="form-control" type="text" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input class="form-control" type="password" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="type_id">Type:</label>
            <!--<input type="text" class="form-control" name="rol">-->
            <select class="form-control" name="type_id" id="type_id">
            <?php foreach ($types as $type): ?>
                <option value="<?php echo $type["types"]["id"]; ?>">
                    <?php echo $type["types"]["name"]; ?>
                </option>
            <?php endforeach; ?>
            </select>
        </div>
        <input class="btn btn-success" type="submit" value="Save">
    </form>
</div>
</div>
