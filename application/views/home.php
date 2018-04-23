<div class="page-header">
  <h1>Data Artikel</h1>
</div>

<div class="container" align="center">
	<table class="table table-hove">
		<tr>
			<td>id</td>
			<td>Judul</td>
			<td>Artikel</td>
			<td>Gambar</td>
		</tr>
		<?php foreach ($artikel->result_array() as $data) { ?>
		<tr>
			<td><?php echo $data['id']?></td>
			<td><?php echo $data['judul']?></td>
			<td><?php echo $data['artikel']?></td>
			<td><?php echo $data['gambar']?></td>
		</tr>
		<?php }?>
	</table>
	<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Tambah Artikel</button>
</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Artikel</h4>
      </div>
      <div class="modal-body">
      	<?php echo form_open_multipart('Blog/tambah'); ?>
      	Judul<input type="text" class="form-control" name="judul" required=""><br>
      	Artikel<input type="text" class="form-control" name="artikel" required=""><br>
      	Gambar <input type="file" class="form-control" name="userfile" required=""> 
      </div>
      <div class="modal-footer">
      	<input type="submit" class="btn btn-success">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>
    </div>

  </div>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>