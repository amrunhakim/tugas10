<!DOCTYPE html>
<html>
<head>
	<title>Latihan CodeIgniter</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
 <div class="container-fluid">
	<h1 class="text-center" style="font-family: helvetica;">Form Artikel Saya</h1>
	<form action="<?php echo site_url('artikel/process'); ?>" method="POST">
		<table class="table">
			<tr>
				<td>Judul Artikel</td>
				<td>:</td>
				<td><input type="text" name="judul_artikel" placeholder="judul_artikel" value="<?php echo isset($artikel_data) ? $artikel_data['judul_artikel'] : ''; ?>"></td>
			</tr>
			<tr>
				<td>Isi Artikel</td>
				<td>:</td>
				<td>
					<textarea rows="10" name="isi_artikel"><?php echo isset($artikel_data) ? $artikel_data['isi_artikel'] : ''; ?></textarea>
				</td>
			</tr>
			<tr>
				<td>Author Artikel</td>
				<td>:</td>
				<td><input type="text" name="author_artikel" placeholder="author_artikel" value="<?php echo isset($artikel_data) ? $artikel_data['author_artikel'] : ''; ?>"></td>
			</tr>
			<tr>
				<td>ID Kategori</td>
				<td>:</td>
				<td>
					<select name="id_kategori">
						<option>-- Pilih Kategori --</option>
						<?php
							foreach($kategori_data as $kategori){
								
								//kondisi selected
								if(isset($artikel_data) && $artikel_data['id_kategori'] == $kategori['id_kategori']){
									$selected = 'selected';
								}else{
									$selected = '';
								}

								?>
								<option value="<?php echo $kategori['id_kategori']?>" <?php echo $selected; ?>>
									<?php echo $kategori['nama_kategori']?>
								</option>
								<?php
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td colspan="3">
					<input type="hidden" name="id_artikel" value="<?php echo isset($artikel_data) ? $artikel_data['id_artikel'] : ''; ?>">
					
					<input type="submit" name="submit" value="Simpan" class="btn btn-success">
					<a href="<?php echo site_url('artikel'); ?>" class="btn btn-success">Kembali</a>
				</td>
			</tr>
		</table>
	</form>
 </div>	
</body>
</html>