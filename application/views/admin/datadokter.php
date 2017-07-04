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
                        <h1>Data Dokter</h1>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 contact-form wow fadeInLeft">
	                   <legend><h1> Data Dokter </h1></legend>
	                   <table class="table table-hover" id="example">
							<thead>
								<tr>
									<th>Nama</th>
									<th>Spesialis</th>
									<th>Alamat</th>
									<th>No Telepon</th>
									<th>Foto</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
						</table>
	                </div>
	                <div class="col-sm-5 contact-address wow fadeInUp">
	                   
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Footer -->
        <script src="<?=base_url()?>assets/DataTables/datatables.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#example').DataTable({
                "processing":true,
                "serverSide":true,
                "lengthMenu":[[1,3,6,-1],[1,3,6,"All"]],
                "ajax":{
                    url : "<?php echo site_url('ForAdmin/data_server')?>",
                    type : "POST"
                },
                "columnDefs":
                [
                    {
                        "targets":0,
                        "data":"nama",
                    },
                    {
                        "targets":1,
                        "data":"spesialis",
                    },
                    {
                        "targets":2,
                        "data":"alamat",
                    },
                    {
                        "targets":3,
                        "data":"hp",
                    },
                    {
                        "targets":4,
                        "data":"foto",
                        "render":function(data,type,full,meta){
                            return '<img src="<?=base_url()?>assets/upload/'+data+'">';

                        }
                    },
                    {
                        "targets":5,
                        "data":null,
                        "searchable":false,
                        "render":function(data,type,full,meta){
                            return '<a href="<?=site_url()?>/ForAdmin/update/'+data["iddokter"]+'">Edit</a>';
                        }
                    },
                    {
                        "targets":6,
                        "data":null,
                        "searchable":false,
                        "render":function(data,type,full,meta){
                            return '<a href="<?=site_url()?>/ForAdmin/delete/'+data["iddokter"]+'">Delete</a>';
                        }
                    },
                    ]
        });
    });
        </script>
     	<?php $this->load->view('admin/Footer'); ?>   

    </body>

</html>