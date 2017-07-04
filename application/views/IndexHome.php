<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('Header'); ?>

    <body>
        
        <!-- Top menu -->
		<?php $this->load->view('Navbar'); ?>

        <!-- Slider -->
        <div class="slider-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 slider">
                        <div class="flexslider">
                            <ul class="slides">
                                <li data-thumb="">
                                    <img src="<?php echo base_url();?>assets/img/slider/1.jpg">
                                    <div class="flex-caption">
                                    	Penyembuhan adalah soal waktu, tapi terkadang peluang ikut berperan.
                                    </div>
                                </li>
                                <li data-thumb="">
                                    <img src="<?php echo base_url();?>assets/img/slider/2.png">
                                    <div class="flex-caption">
                                    	Aku memiliki prinsip keseimbangan untuk mencapai kehidupan yang tenteram. Yakni cinta, kesehatan, dan kemapanan” – James Thurber
                                    </div>
                                </li>
                                <li data-thumb="">
                                    <img src="<?php echo base_url();?>assets/img/slider/3.jpg">
                                    <div class="flex-caption">
                                    	Kesehatan adalah hubungan antara anda dan tubuh anda
                                    </div>
                                </li>
                                <li data-thumb="">
                                    <img src="<?php echo base_url();?>assets/img/slider/4.jpg">
                                    <div class="flex-caption">
                                    	Kesehatan adalah keadaan harmoni yang lengkap dari tubuh, pikiran dan jiwa. Ketika seseorang bebas dari cacat fisik dan gangguan mental, gerbang jiwa pun akan terbuka.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Presentation -->
        <div class="presentation-container">
        	<div class="container">
        		<div class="row">
	        		<div class="col-sm-12 wow fadeInLeftBig">
	            		<h1>We are <span class="violet">Andia</span>, a super cool design agency.</h1>
	            		<p>We design beautiful websites, logos and prints. Your project is safe with us.</p>
	            	</div>
            	</div>
        	</div>
        </div>

        <!-- Info Kesehatan -->
        <div class="services-container">
	        <div class="container">
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
		                    <p>Tak hanya membuat hati menjadi bahagia, beberapa sendok es krim ternyata mampu meningkatkan kecerdasan seseorang. Sensasi nikmaat ..</p>
		                    <a class="big-link-1" href="<?php echo site_url()?>/Konsultasi/LebihPintar">Read more</a>
		                </div>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Testimonials -->
        <div class="testimonials-container">
	        <div class="container">
	        	<div class="row">
		            <div class="col-sm-12 testimonials-title wow fadeIn">
		                <h2>Motto</h2>
		            </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-10 col-sm-offset-1 testimonial-list">
	                	<div role="tabpanel">
	                		<!-- Tab panes -->
	                		<div class="tab-content">
	                			<div role="tabpanel" class="tab-pane fade in active" id="tab1">
	                				<div class="testimonial-image">
	                					<img src="assets/img/testimonials/1.jpg" alt="" data-at2x="<?php echo base_url();?>assets/img/testimonials/1.jpg">
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	"Waktu dan kesehatan adalah dua aset berharga yang tidka kita kenali dan hargai sampai mereka telah habis. 
		                                	Kesehatan tampak berharga setelah kita kehilangannya"<br>
		                                </p>
	                                </div>
	                			</div>
	                		</div>
	                	</div>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Footer -->
     	<?php $this->load->view('Footer'); ?>   

    </body>

</html>