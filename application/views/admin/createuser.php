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
                        <h1>Form Tambah User/</h1>
                        <p>Silahkan isi form untuk menambahkan user</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us-container">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-sm-6 contact-form wow fadeInLeft">
						<?php echo form_open_multipart('ForAdmin/CreateUser'); ?>
						<?php echo validation_errors(); ?>
						<div class="form-group">
							<label for="">Nama </label>
							<input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama">
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Tanggal </label>
							<input type="date" name="tgl" class="form-control" id="tgl"><br>
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Email </label>
							<input type="text" name="email" class="form-control" id="email" placeholder="Masukkan Email yang Valid"><br>
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Jenis Kelamin </label>
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<input type="radio" name="jk" id="jk" value="Laki-Laki"> Laki - Laki
							<input type="radio" name="jk" id="jk" value="Perempuan"> Perempuan
						</div>
					</div>

					<div class="col-sm-6 contact-address wow fadeInUp">
						<br> <br> <br>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Username </label>
							<input type="text" name="username" class="form-control" id="username" maxlength="15" placeholder="Masukkan Username Tanpa Spasi Maksimal 15 Karakter"><br>
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Password </label>
							<input type="text" name="password" class="form-control" id="password" maxlength="10" placeholder="Masukkan Password Maksimal 10 Karakter"><br>
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Hak Akses </label>
							<select class='form-control' id='hakakses' name='hakakses'>
								<option value="Admin"> Admin </option>
								<option value="User"> User </option>
								<option value="Dokter"> Dokter </option>
							</select><br>
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Foto </label>
							<input type="file" name="userfile" id="userfile">							
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