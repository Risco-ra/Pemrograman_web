<?php include("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Gallery</title>
	
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">

	
	</head>
<body>

	<?php include("includes/navbar.php"); ?>
	<div  style="background-image: url(bg.jpeg); height: 500px; width: 100%; font-family: cursive,snell; " ; > <br><br><h1 style="color: #ffffff" align="center">Be Yourself And Never Surrender</h1> </div>
	
	<div class="container body" align="center">
		
		<div class="gal">
			<?php
			$query = $koneksi->query("SELECT * FROM galeri ORDER BY id DESC") or die($koneksi->error);
			if($query->num_rows){
				while($row = $query->fetch_assoc()){
					echo '<a href="foto.php?id='.$row['id'].'"><img src="gallery/'.$row['nama'].'" alt=""></a>';
						print("<br>");
				}
			}
			?>
		</div>
	</div>

	<div class="footer" >created by Risco_ra </div>
	<?php 

$filecounter="counter.txt";
$fl=fopen($filecounter, "r+");

$hit=fread($fl,filesize($filecounter));

echo ("<table width=250 align=center border=1 cellspacing=0 cellpadding=0 bordercolor=#0000FF> <tr>");
echo ("<td width=250 valign=middle align=center>");
echo ("<font face=verdana size=2 color=#FF0000><b>");
echo ("anda pengunjung yang ke : ");
echo ($hit);
echo ("<b/></font>");
fclose($fl);

$fl=fopen($filecounter, "w+");

$hit=$hit+1;

fwrite($fl, $hit,strlen($hit));

fclose($fl);
 ?>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>