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
                        <i class="fa fa-users"></i>
                        <h1>Form Edit User/</h1>
                        <p>Silahkan isi form untuk mengedit user</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us-container">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-sm-6 contact-form wow fadeInLeft">
						<?php echo form_open_multipart('ForAdmin/UpdateUser/'.$this->uri->segment(3)); ?>
						<?php echo validation_errors(); ?>
						<div class="form-group">
							<label for="">Nama </label>
							<input type="text" name="nama" class="form-control" id="nama" value="<?php echo $user[0]->nama ?>">
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Tanggal </label>
							<input type="date" name="tgl" class="form-control" id="tgl" value="<?php echo $user[0]->tgl ?>"><br>
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Email </label>
							<input type="text" name="email" class="form-control" id="email" value="<?php echo $user[0]->email ?>"><br>
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Jenis Kelamin </label>
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<?php
								if($user[0]->jk == "Laki-laki"){
								  echo "<input type='radio' name='jk' value='Laki-laki' checked='checked'>Laki-laki";
								  echo "<input type='radio' name='jk' value='Perempuan'>Perempuan";
								}else{
								  echo "<input type='radio' name='jk' value='Laki-laki'>Laki-laki";
								  echo "<input type='radio' name='jk' value='Perempuan' checked='checked'>Perempuan";
								}
								?>
						</div>
					</div>

					<div class="col-sm-6 contact-address wow fadeInUp">
						<br> <br> <br>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Username </label>
							<input type="text" name="username" class="form-control" id="username" maxlength="15" value="<?php echo $user[0]->username ?>"><br>
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Password </label>
							<input type="text" name="password" class="form-control" id="password" maxlength="10" value="<?php echo $user[0]->password ?>"><br>
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
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<img src=<?=base_url("assets/upload")."/".$user[0]->foto?> width="200">
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
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