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
	                    	Tak hanya membuat hati menjadi bahagia, beberapa sendok es krim ternyata mampu meningkatkan kecerdasan seseorang.
	                    </i></p>
	                    <center> <img src="<?php echo base_url();?>assets/img/news/lebihpintar.jpg"> </center>
	                    <h2>Ingin Lebih Pintar? Coba Makan Es Krim di Pagi Hari</h2>
	                    <p align="justify">
	                    	Sensasi nikmat es krim memang selalu memikat, terlebih bagi para penggemarnya. Hal yang lebih menyenangkan, Anda juga bisa menikmati banyak manfaat darinya. Bahkan ternyata konsumsi es krim dapat meningkatkan kecerdasan.
	                    </p>
	                    <p align="justify">
	                    	Sebuah studi dilakukan di Universitas Tokyo, Jepang pada sejumlah partisipan dengan memberikan mereka es krim sesaat setelah bangun pagi. Selanjutnya para peneliti membandingkan aktivitas otak para partisipan dengan mereka yang tidak mengonsumsinya di pagi hari. Hasilnya, partisipan yang tergabung dalam kelompok es krim memiliki pola aktivitas otak yang lebih tinggi. Aktivitas otak yang lebih tinggi ini berhubungan langsung dengan produktivitas dan kecerdasan serta berbanding terbalik dengan tingkat stres seseorang. 
	                    </p>
	                    <h3><strong> Kok Bisa? </strong></h3>
	                    <p align="justify">
	                    	Berbagai teori kemudian bermunculan untuk menjawab hal ini. Salah satu teori yang muncul adalah kandungan glukosa atau zat gula di dalam es krim. Untuk bekerja, otak memang membutuhkan asupan gula yang cukup. Faktanya, beberapa sendok es krim cukup mengandung apa yang dibutuhkan otak ini. Selain itu, tidak bisa dimungkiri juga bahwa terdapat kebahagiaan tersendiri saat menikmati sajian penuh daya pikat yang satu ini. Rasa bahagia yang tercipta mampu membuat otak melepaskan hormon-hormon dan berbagai zat yang akan meningkatkan kreativitas dan kecerdasan seseorang.
	                    </p>
	                    <p align="justify">
	                    	Tapi ingat, jangan mengonsumsinya secara berlebihan. Bisa-bisa pola diet Anda jadi rusak.
	                    </p>
	                    <p align="justify">
	                    	Jadi, tidak perlu galau lagi menikmati beberapa suap es krim di pagi hari. Tak hanya membuat hati gembira, tapi Anda juga lebih lancar saat bekerja dan dan kecerdasan pun semakin meningkat.
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
		                    <div class="service-icon"><i><img src="<?php echo base_url();?>assets/img/news/tidursiang.jpg"></i></div>
		                    <h3>Manfaat Tidur Siang</h3>
		                    <p>Setelah beraktivitas pada siang hari, umumnya orang tua menerapkan aturan tidur siang pada anak. Apa sesungguhnya manfaat tidur siang? ... </p>
		                    <a class="big-link-1" href="<?php echo site_url()?>/Konsultasi/TidurSiang">Read more</a>
		                </div>
					</div>
					<div class="col-sm-3">
		                <div class="service wow fadeInDown">
		                    <div class="service-icon"><img src="<?php echo base_url();?>assets/img/news/sakitmag.jpg"></i></i></div>
		                    <h3>Sakit Mag</h3>
		                    <p>Sakit mag Anda tiba-tiba kambuh. Jika sudah begitu, harus makan apa agar tak semakin parah?Sakit mag dapat menyerang siapa saja dan kapan sajaa... </p>
		                    <a class="big-link-1" href="<?php echo site_url()?>/Konsultasi/SakitMag">Read more</a>
		                </div>
	                </div>
	                <div class="col-sm-3">
		                <div class="service wow fadeInUp">
		                    <div class="service-icon"><img src="<?php echo base_url();?>assets/img/news/nyerileher.jpg"></i></i></div>
		                    <h3>Mengatasi Nyeri Leher</h3>
		                    <p>Tak hanya dengan obat-obatan, nyeri leher juga dapat disembuhkan dengan rehabilitasi medik. Jika istilah ini masih baru bagi Anda,..</p>
		                    <a class="big-link-1" href="<?php echo site_url()?>/Konsultasi/NyeriLeher">Read more</a>
		                </div>
	                </div>
	                <div class="col-sm-3">
		                <div class="service wow fadeInDown">
		                    <div class="service-icon"><img src="<?php echo base_url();?>assets/img/news/lebihpintar.jpg"></i></i></div>
		                    <h3>Ingin Lebih Pintar? </h3>
		                    <p>Tak hanya membuat hati menjadi bahagia, beberapa sendok es krim ternyata mampu meningkatkan kecerdasan seseorang...</p>
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