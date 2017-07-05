<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('dokter/Header'); ?>

    <body>
        
        <!-- Top menu -->
		<?php $this->load->view('dokter/navbardokter'); ?>
		
		  <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-envelope"></i>
                        <h1>Form Jawab Konsultasi/</h1>
                        <p>Silahkan berikan jawaban terbaik anda</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us-container">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						<?php echo form_open_multipart('ForDokter/UpdateKonsultasi/'.$this->uri->segment(3)); ?>
						<?php echo validation_errors(); ?>
						<div class="form-group">
							<label for="">Nama </label>
							<input type="text" name="iduser" class="form-control" id="iduser" value="<?php echo $konsultasi[0]->iduser ?>">
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Subjek </label>
							<input type="text" name="subjek" class="form-control" id="subjek" value="<?php echo $konsultasi[0]->subjek ?>"><br>
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Keluhan </label>
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<textarea name="pertanyaan" rows="5" cols="50"><?php echo $konsultasi[0]->pertanyaan ?></textarea><br>
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Jawaban </label>
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<textarea name="jawaban" rows="5" cols="50"><?php echo $konsultasi[0]->jawaban ?></textarea><br>
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">ID Dokter </label>
							<input type="text" name="iddokter" class="form-control" id="iddokter" value="<?php echo $konsultasi[0]->iddokter ?>"><br>
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
     	<?php $this->load->view('admin/Footer'); ?>   

    </body>

</html>