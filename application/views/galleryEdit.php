	<div class="jumbotron" style=" padding-bottom: 5px;" align="center">

		<div class="container">
			<h1 class="display-4">
				<a
					href =
						"<?php echo base_url('gallery/'.$gallery->id)?>"
					style =
						"color: black;"
				>
					<?php echo $gallery->name;?>
				</a>
			</h1>
		</div>

		<hr class="my-4">

		<div class="form-group d-flex justify-content-center">
			<form action="<?php echo base_url('gallery/update') ?>" class="form-inline" method="post">
				<div class="form-group mb-2">
					<input
						type="text"
						class="form-control"
						name="name"
						placeholder=" <?php echo $gallery->name; ?> "
					/>
				</div>
				<div class="form-group mx-sm-3 mb-2">
					<button type="submit " class="btn btn-primary">Renomear</button>
				</div>
				<input type="hidden" name="idGallery"value = "<?php echo $gallery->id; ?>" />
			</form>
		</div>

	</div>

	<table class="table table-striped">
		<thead>
		<tr>
			<th scope="col" >#</th>
			<th scope="col" >Url</th>
			<th scope="col" ></th>
		</tr >
		</thead>
		<tbody>
			<?php foreach ($galleryImages as $key=>$image){?>
				<tr>
					<th scope="row"><?php echo ($key+1);?></th>
					<td><?php echo $image->url; ?></td>
					<td>
						<form action="<?php echo base_url('Image/remove') ?>" method="post">
							<input type="hidden" name="id" value = "<?php echo $image->id; ?>" />
							<input type="hidden" name="idGallery" value = "<?php echo $gallery->id; ?>" />
							<button type="submit " class="btn btn-danger"> Apagar </button>
						</form>
					</td>
				</tr>
			<?php }?>
		</tbody>
	</table>

