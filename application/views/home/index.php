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

	<div>
		<?php
			if(count($artikel_data) > 0){
				foreach($artikel_data as $key => $artikel){
					?>
					<div>
						<h2><?php echo $artikel['judul_artikel']; ?></h2>
						<p><?php echo $artikel['tanggal_artikel']; ?></p>

						<p><?php echo $artikel['isi_artikel']; ?></p>
						<hr>
					</div>
					<?php
				}
			}else{
				?>
				<em>Tidak ada artikel.</em>
				<?php
			}
		?>
	</div>
 </div>	
</body>
</html>