<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Header</title>
</head>
<body>
	<nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">Andia - a super cool design agency...</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-home"></i><br>Home <span class="caret"></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-left" role="menu">
								<li><a href="index.html">Home</a></li>
								<li><a href="index-2.html">Home 2</a></li>
							</ul>
						</li>
						
						<li>
							<a href="<?php echo site_url()?>/Konsultasi/Gallery"><i class="fa fa-tasks"></i><br>Konsultasi</a>
						</li>
						<li>
							<a href="<?php echo site_url()?>/Konsultasi/Gallery"><i class="fa fa-paperclip"></i><br>Obat</a>
						</li>
						<li>
							<a href="<?php echo site_url()?>/Konsultasi/Gallery"><i class="fa fa-envelope"></i><br>Contact</a>
						</li>
						<li class="active">
							<a href="<?php echo site_url()?>/Konsultasi/Gallery"><i class="fa fa-user"></i><br>Login</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
</body>
</html>