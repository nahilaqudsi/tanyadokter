		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href=""></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="glyphicon glyphicon-user"></i><br>Dokter <span class="caret"></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-left" role="menu">
								<li><a href="<?php echo site_url()?>/ForAdmin/CreateDokter">Tambah Dokter</a></li>
								<li><a href="<?php echo site_url()?>/ForAdmin/DataDokter">Tabel Dokter</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-users"></i><br>Users <span class="caret"></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-left" role="menu">
								<li><a href="<?php echo site_url()?>/ForAdmin/CreateUser">Tambah User</a></li>
								<li><a href="<?php echo site_url()?>/ForAdmin/DataUser">Tabel User</a></li>
							</ul>						
						</li>
						<li>
							<a href="<?php echo site_url()?>/Konsultasi/index"><i class="glyphicon glyphicon-off"></i><br>Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>