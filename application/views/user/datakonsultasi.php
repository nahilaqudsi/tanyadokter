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
                        <i class="fa fa-tasks"></i>
                        <h1>Riwayat Konsultasi</h1>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contact Us -->
        <div class="contact-us-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 contact-form wow fadeInLeft">
                       <table class="table table-hover" id="example">
                            <thead>
                                <tr>
                                    <th>Subjek</th>
                                    <th>Pertanyaan</th>
                                    <th>Jawaban</th>
                                    <th>Dokter</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listkonsultasi as $key) { ?>
                                    <tr>
                                        <td><?php echo $key->subjek ?></td>
                                        <td><?php echo $key->pertanyaan ?></td>
                                        <td><?php echo $key->jawaban ?></td>
                                        <td><?php echo $key->NamaDokter ?></td>
                                    </tr>
                                 <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        
        <?php $this->load->view('admin/Footer'); ?>   
        <script src="<?=base_url()?>assets/DataTables/datatables.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );    
        </script>

    </body>

</html>