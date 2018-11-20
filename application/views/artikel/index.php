<!DOCTYPE html>
<html>
<head>
	<title>Latihan CodeIgniter</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
 <div class="container-fluid">
    <h1 class="text-center" style="font-family: helvetica;">Daftar Artikel Saya</h1>
	<a href="<?php echo site_url('artikel/add'); ?>">Tambah Artikel</a><br/><br/>
	
	<div class="table-responsive">
	<table class="table table-bordered table-striped">
		<thead class="text-center">
			<tr>
				<th>No.</th>
				<th>Judul</th>
				<th>Author</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody class="text-center">
			<?php
				if(count($artikel_data) > 0){
					foreach($artikel_data as $key => $artikel){
						?>
						<tr>
							<td><?php echo $key + 1; ?></td>
							<td class="text-left"><?php echo $artikel['judul_artikel']; ?></td>
							<td><?php echo $artikel['author_artikel']; ?></td>
							<td>
								<a href="<?php echo site_url('artikel/update/'.$artikel['id_artikel']); ?>">Update</a> |
								<a href="<?php echo site_url('artikel/delete/'.$artikel['id_artikel']); ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				}else{
					?>
					<tr>
						<td colspan="4">Tidak ada artikel.</td>
					</tr>
					<?php
				}
			?>
		</tbody>
	</table>
	</div>
 </div>
</body>
</html>