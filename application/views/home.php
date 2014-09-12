<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/custom.css" />
	<title>TEGIK</title>
</head>
<body>
	<div id="container">
		<head class="row">
			<div class="col-md-4 col-md-offset-4"><h1>Candidatos Tegik</h1></div>
		</head>
		<aside class="row">
			<button class="col-md-offset-2 col-md-3 btn btn-success" data-toggle="modal" data-target="#myModal">New product</button>
		</aside>
		<section class="row">
			<div class="col-md-10 col-md-offset-1">
				<table class="table table-striped">
				  <th>ID</th>
				  <th>Name</th>
				  <th>Price</th>
				  <th>Category</th>
				  <th>Store</th>
				  <th>Created at</th>
				  <th>Updated at</th>
				  <th>Actions</th>
				  <?php 
				  if(isset($products)):
				  	foreach ($products as $product): ?>
						<tr>
							<td><?php echo $product->id; ?></td>
							<td><?php echo $product->name; ?></td>
							<td><?php echo $product->price; ?></td>
							<td><?php echo $product->category_name; ?></td>
							<td><?php echo $product->store_name; ?></td>
							<td><?php echo $product->created_at; ?></td>
							<td><?php echo $product->updated_at; ?></td>
							<td><button class="btn btn-info">Edit</button><button class="btn btn-danger">Delete</button></td>
						</tr>
			  <?php endforeach;
				  endif;
				  ?>
				</table>
			</div>
		</section>
		
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title" id="myModalLabel">New product</h4>
		      </div>
		      <div class="modal-body">
		        	<div class="form-group">
					<label class="col-lg-2 control-label" for="inputName">Name</label>
					<div class="col-lg-10">
					  <input type="text" class="form-control" id="inputName" placeholder="Example...">
					</div>
					</div>
					<div class="form-group">
					<label for="inputPrice" class="col-lg-2 control-label">Price</label>
					<div class="col-lg-10">
					  <input type="text" class="form-control" id="inputPrice" placeholder="00.00">
					</div>
					</div>
					<div class="form-group">
					<label class="col-lg-2 control-label" for="selectCategory">Category</label>
					<div class="col-lg-10">
					  <select class="form-control" id="selectCategory">
					  	<option value="-">-- select a category --</option>
					  	<?php if(isset($categories)):
					  				foreach ($categories as $category): ?>
					  				<option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
					  	<?php		endforeach;
					  		   endif;
					  	?>
					  </select>
					</div>
					</div>
					<div class="form-group">
					<label for="selectStore" class="col-lg-2 control-label" for="selectStore">Store</label>
					<div class="col-lg-10">
					  <select class="form-control" id="selectStore">
					  	<option value="-">-- select a store --</option>
					  	<?php if(isset($stores)):
					  				foreach ($stores as $store): ?>
					  				<option value="<?php echo $store->id;?>"><?php echo $store->name;?></option>
					  	<?php		endforeach;
					  		   endif;
					  	?>
					  </select>
					</div>
					</div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary" id="saveChanges">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>
	<div>
	<script src="<?php echo base_url();?>/assets/jquery.js"></script>
	<script src="<?php echo base_url();?>/assets/bootstrap.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#saveChanges').click(function(){
				var name = $('#inputName').val();
				var price = $('#inputPrice').val();
				var category = $('#selectCategory').val();
				var store = $('#selectStore').val();
				
				$.post("<?php echo base_url();?>/index.php/product/newProduct/", {product_name: name, product_price: price, product_category: category, product_store: store})
				.done(function(data) {
				    alert("Tu reseña fue enviada con éxito!");
				});
			});
		});
	</script>
</body>
</html>