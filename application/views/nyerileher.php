<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('Header'); ?>

    <body>
        
        <!-- Top menu -->
		<?php $this->load->view('Navbar'); ?>

		<div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-user"></i>
                        <h1>Berita /</h1>
                        <p>Temukan Solusi Sehatmu Disini</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Us Text -->
        <div class="about-us-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 about-us-text wow fadeInLeft">
	                    <p><i>
	                    	Pendekatan rehabilitasi medik dapat membantu menangani nyeri leher.
	                    </i></p>
	                    <center> <img src="assets/img/news/nyerileher.jpg"> </center>
	                    <h2>Mengatasi Nyeri Leher dengan Rehabilitasi Medik</h2>
	                    <p align="justify">
	                    	Tak hanya dengan obat-obatan, nyeri leher juga dapat disembuhkan dengan rehabilitasi medik. Jika istilah ini masih baru bagi Anda, rehabilitasi medik adalah latihan fisik pada daerah yang terganggu, dengan bantuan dokter rehabilitasi medik.
	                    </p>
	                    <p align="justify">
	                    	Ketika pasien berkunjung ke dokter rehabilitasi medik, hal pertama yang akan dilakukan adalah pemeriksaan secara menyeluruh pada tubuh. Kekuatan leher, refleks, dan berbagai keluhan rasa sakit akan diteliti. Saat rehabilitasi medik, pasien akan diminta untuk melakukan peregangan dan latihan kekuatan. Peregangan ini bertujuan untuk “menenangkan” leher Anda yang kaku, serta mengembalikan fungsi normal leher. Sementara itu, latihan kekuatan dapat membantu mengurangi nyeri leher.
	                    </p>
	                    <p align="justify">
	                    	Manuver gerakan juga dapat dilakukan untuk menangani nyeri leher, seperti penarikan leher pada kasus penyakit diskus servikal. Penarikan leher ini berfungsi untuk mengurangi tekanan pada leher. Selain manuver gerakan, pasien juga dapat menggunakan bantal servikal. Bantal ini dibuat khusus untuk menahan posisi leher saat tidur. Sehingga, pasien tidak tidur dengan posisi leher yang salah yang dapat memperburuk kondisi. Pada pasien yang mengalami kecelakaan pada bagian leher, penggunaan collar neck disarankan untuk mengurangi pergerakan leher yang berlebihan.
	                    </p>
	                    <p align="justify">
	                    	Nah, jika Anda sering mengalami nyeri leher, segeralah periksakan diri Anda. Karena penanganan yang tepat dari dokter rehabilitasi medik akan mengurangi derajat kerusakan leher yang Anda alami.
	                    </p>
	                    <p align="justify">
	                    	Jadi, kebutuhan tidur anak bervariasi sesuai usianya. Secara umum, anak yang berusia di atas lima tahun tidak membutuhkan tidur siang lagi. Namun, bila kebutuhan tidur anak tidak terpenuhi pada malam hari, tidur siang dapat membantu untuk mencukupinya.
	                    </p>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Info Kesehatan -->
        <div class="team-container">
        	<div class="container">
	            <div class="row">
		            <div class="col-sm-12 team-title wow fadeIn">
		                <h2>Info Kesehatan</h2>
		            </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-3">
		                <div class="service wow fadeInUp">
		                    <div class="service-icon"><i><img src="assets/img/news/tidursiang.jpg"></i></div>
		                    <h3>Manfaat Tidur Siang</h3>
		                    <p>Setelah beraktivitas pada siang hari, umumnya orang tua menerapkan aturan tidur siang pada anak. Apa sesungguhnya manfaat tidur siang? ... </p>
		                    <a class="big-link-1" href="<?php echo site_url()?>/Konsultasi/TidurSiang">Read more</a>
		                </div>
					</div>
					<div class="col-sm-3">
		                <div class="service wow fadeInDown">
		                    <div class="service-icon"><img src="assets/img/news/sakitmag.jpg"></i></i></div>
		                    <h3>Sakit Mag</h3>
		                    <p>Sakit mag Anda tiba-tiba kambuh. Jika sudah begitu, harus makan apa agar tak semakin parah?Sakit mag dapat menyerang siapa saja dan kapan sajaa... </p>
		                    <a class="big-link-1" href="<?php echo site_url()?>/Konsultasi/SakitMag">Read more</a>
		                </div>
	                </div>
	                <div class="col-sm-3">
		                <div class="service wow fadeInUp">
		                    <div class="service-icon"><img src="assets/img/news/nyerileher.jpg"></i></i></div>
		                    <h3>Mengatasi Nyeri Leher</h3>
		                    <p>Tak hanya dengan obat-obatan, nyeri leher juga dapat disembuhkan dengan rehabilitasi medik. Jika istilah ini masih baru bagi Anda,..</p>
		                    <a class="big-link-1" href="<?php echo site_url()?>/Konsultasi/NyeriLeher">Read more</a>
		                </div>
	                </div>
	                <div class="col-sm-3">
		                <div class="service wow fadeInDown">
		                    <div class="service-icon"><img src="assets/img/news/lebihpintar.jpg"></i></i></div>
		                    <h3>Ingin Lebih Pintar? </h3>
		                    <p>Tak hanya membuat hati menjadi bahagia, beberapa sendok es krim ternyata mampu meningkatkan kecerdasan seseorang. Sensasi nikmat ..</p>
		                    <a class="big-link-1" href="<?php echo site_url()?>/Konsultasi/LebihPintar">Read more</a>
		                </div>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Testimonials -->
        <div class="testimonials-container">
	        <div class="container">
	        </div>
        </div>

        <!-- Footer -->
     	<?php $this->load->view('Footer'); ?>   

    </body>

</html>