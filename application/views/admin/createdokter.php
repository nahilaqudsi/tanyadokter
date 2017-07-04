<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('admin/Header'); ?>

    <body>
        
        <!-- Top menu -->
		<?php $this->load->view('admin/navbaradmin'); ?>
		
		  <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-envelope"></i>
                        <h1>Form Tambah Dokter/</h1>
                        <p>Silahkan isi form untuk menambahkan data diri dokter</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us-container">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						<?php echo form_open_multipart('ForAdmin/CreateDokter'); ?>
						<?php echo validation_errors(); ?>
						<div class="form-group">
							<label for="">Nama </label>
							<input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Beserta Gelar">
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Spesialis </label>
							<input type="text" name="spesialis" class="form-control" id="spesialis" placeholder="Masukkan Spesialis Dokter">
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Alamat </label>
							<input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat Lengkap">
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Telepon </label>
							<input type="text" name="hp" class="form-control" id="hp" placeholder="Masukkan Nomor Telepon">
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Foto </label>
							<input type="file" name="userfile" class="form-control" id="userfile">							
						</div>
						<div>
							<center>
							<button type="submit" class="btn btn-primary">Submit</button>
							<?php echo form_close(); ?>
							</center>
						</div>
					</div>
	        	</div>
	        </div>
        </div>
        
        <!-- Footer -->
     	<?php $this->load->view('admin/Footer'); ?>   

    </body>

</html>