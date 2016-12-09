<script>
	function confirmarEliminacion($id)
	{
		eliminar = confirm("¿Deseas eliminar este registro?");
		if (eliminar)
			window.location.href = "<?php echo APP_URL.'/categories/delete/';?>"+$id;
		else
			alert("Eliminación cancelada");
	}
</script>

<div class="row">
	<h4>Categories list</h4>
	<a class="btn btn-success"  href="<?php echo APP_URL.'/categories/add/'; ?>">Add</a>
	<table class="table table-bordered" border="1">
		<caption>
			<h4>Total of registers: <?php echo $categoriesCount; ?></h4>
		</caption>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
		<?php
		if (!empty($categories)) {
			foreach ($categories as $type): 
		?>
		<tr>
			<th><?php echo $type["categories"]["id"]; ?></th>
			<td><?php echo $type["categories"]["name"]; ?></td>
			<td>
				<?php echo $this->Html->link("Edit", array(
					"controller"=>"categories", 
					"method"=>"edit", 
					"arg" => $type["categories"]["id"]
				)); ?>
				<button class="btn btn-danger" onclick="confirmarEliminacion(<?php echo $type["categories"]["id"]; ?>);">
					Delete
				</button>
			</td>
		</tr>
		<?php 
			endforeach;
		}
		?>
		</tbody>
	</table>
</div>