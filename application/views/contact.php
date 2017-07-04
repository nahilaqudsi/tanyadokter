<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('Header'); ?>

    <body>
        
        <!-- Top menu -->
		<?php $this->load->view('Navbar'); ?>
		
		  <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-envelope"></i>
                        <h1>Contact Us</h1>
                        <p>Silahkan isi form untuk bergabung dengan kami</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-7 contact-form wow fadeInLeft">
	                    <p>
	                    	Anda seorang dokter? Ingin bergabung dengan "Tanya Dokter"? Yuk, isikan data diri dibawah ini
	                    </p>
	                    <?php echo form_open_multipart('Konsultasi/CreateDokterJOin'); ?>
	                    	<div class="form-group">
	                    		<label for="contact-name">Nama</label>
	                        	<input type="text" name="nama" class="contact-name" id="contact-name" placeholder="Masukkan Nama beserta Gelar">
	                        </div>
	                    	<div class="form-group">
	                    		<label for="contact-email">Email</label>
	                        	<input type="text" name="email" class="contact-email" id="contact-email" placeholder="Masukkan Email">
	                        </div>
	                        <div class="form-group">
	                    		<label for="contact-email">Telepon</label>
	                        	<input type="text" name="tlp" class="contact-email" id="contact-email" placeholder="Masukkan Nomor Telepon">
	                        </div>
	                        <div class="form-group">
	                        	<label for="contact-subject">Spesialis</label>
	                        	<input type="text" name="spesialis" class="contact-subject" id="contact-subject" placeholder="Masukkan Spesialis">
	                        </div>
	                        <div class="form-group">
	                        	<label for="contact-message">Alasan Bergabung</label>
	                        	<textarea name="alasan" class="contact-message" id="contact-message"></textarea>
	                        </div>
	                        <div class="form-group">
	                        	<label for="contact-message">Foto
	                        	<input type="file" name="userfile" class="form-control" id="userfile"> </label>
	                        </div>
	                        <button type="submit" class="btn">Send</button>
	                        <?php echo form_close(); ?>
	                </div>
	                <div class="col-sm-5 contact-address wow fadeInUp">
	                    <h3>We Are Here</h3>
	                    <div class="map"></div>
	                    <h3>Alamat</h3>
	                    <p>Jalan Simbar Menjangan 15A Malang</p>
	                    <p>Phone: 0341 - 444888</p>
	                </div>
	            </div>
	        </div>
        </div>
        <!-- Footer -->
     	<?php $this->load->view('Footer'); ?>   

    </body>

</html>