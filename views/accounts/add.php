<div class="row">
<div class="col-md-6 col-sm-12 col-xs-12">
    <h4>Add account</h4>
    <form action="<?php echo APP_URL."/accounts/add"; ?>" method="POST">
         <div class="form-group">
            <label for="user_id">Username:</label>
            <select class="form-control" name="user_id" id="user_id">
            <?php foreach ($users as $user): ?>
                <option value="<?php echo $user["users"]["id"]; ?>">
                    <?php echo $user["users"]["username"]; ?>
                </option>
            <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control" type="text" id="name" name="name">
        </div>
        <input class="btn btn-success" type="submit" value="Save">
    </form>
</div>
</div>