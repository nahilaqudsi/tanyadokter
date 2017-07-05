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
                        <i class="fa fa-user"></i>
                        <h1>Form Edit Dokter/</h1>
                        <p>Silahkan isi form untuk mengedit data diri dokter</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us-container">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						<?php echo form_open_multipart('ForAdmin/UpdateDokter/'.$this->uri->segment(3)); ?>
						<?php echo validation_errors(); ?>
						<div class="form-group">
							<label for="">Nama </label>
							<input type="text" name="nama" class="form-control" id="nama" value="<?php echo $dokter[0]->nama ?>">
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Spesialis </label>
							<input type="text" name="spesialis" class="form-control" id="spesialis" value="<?php echo $dokter[0]->spesialis ?>">
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Alamat </label>
							<input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $dokter[0]->alamat ?>"">
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Telepon </label>
							<input type="text" name="hp" class="form-control" id="hp" value="<?php echo $dokter[0]->hp ?>">
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<label for="">Foto </label>
						</div>
						<div class="col-xs- col-sm- col-md- col-lg-">
							<img src=<?=base_url("assets/upload")."/".$dokter[0]->foto?> width="200">
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