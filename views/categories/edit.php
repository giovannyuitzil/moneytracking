<div class="row">
<div class="col-md-6 col-sm-12 col-xs-12">
    <h4>Edit category</h4>
    <form action="<?php echo APP_URL."/categories/edit"; ?>" method="POST">
    	<input type="hidden" name="id" value="<?php echo $category["id"]; ?>">
      <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control"  type="text" name="name" value="<?php echo $category["name"]; ?>">
        </div>
        <input  class="btn btn-success" type="submit" value="Guardar">
    </form>
</div>