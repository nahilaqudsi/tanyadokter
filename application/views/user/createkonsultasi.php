<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('user/Header'); ?>

    <body>
        
        <!-- Top menu -->
		<?php $this->load->view('user/navbaruser'); ?>
		
		  <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-envelope"></i>
                        <h1>Form Konsultasi/</h1>
                        <p>Silahkan tuliskan keluhan anda dan kami akan temukan solusinya</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us-container">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						<?php echo form_open_multipart('Foruser/CreateKonsultasi'); ?>
						<?php echo validation_errors(); ?>
						<div class="form-group">
							<label for="">Nama </label>
							<input type="text" name="iduser" class="form-control" id="iduser" placeholder="Masukkan Nama Anda">
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Subjek </label>
							<input type="text" name="subjek" class="form-control" id="subjek" placeholder="Masukkan Umur Anda"><br>
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Keluhan </label>
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<textarea name="pertanyaan" rows="5" cols="50"></textarea><br>
						</div>
						<div>
							<center><br>
							<button type="submit" class="btn btn-primary">Submit</button>
							<?php echo form_close(); ?>
							</center>
						</div>
					</div>
	        	</div>
	        </div>
        </div>
        
        <!-- Footer -->
     	<?php $this->load->view('user/Footer'); ?>   

    </body>

</html>