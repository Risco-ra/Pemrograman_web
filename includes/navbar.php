	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Gallery</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li <?php if(!$_GET['menu']){ echo 'class="active"'; } ?>><a href="index.php">Home</a></li>
					<li <?php if($_GET['menu'] == 'upload'){ echo 'class="active"'; } ?>><a href="upload.php?menu=upload">Upload</a></li>
					<li <?php if($_GET['menu'] == 'about'){ echo 'class="active"'; } ?>> <a href="about.php?menu=about">About</a></li>
					<li <?php if($_GET['menu'] == 'contact'){ echo 'class="active"'; } ?>> <a href="contact.php?menu=contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>