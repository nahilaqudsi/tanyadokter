<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php echo base_url('')?>assets/css/bootstrap.min.css">
	<title>Document</title>
</head>
<body>
	<div class="alert alert-success">
		<strong> Data Berhasil Disimpan || </strong>

		<?php 
			echo anchor('Konsultasi/CreateDokterJOin', 'Back');
		?>
	</div>
</body>
</html>