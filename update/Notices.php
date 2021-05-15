
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
		<title>JspmStudio</title>
		<link href="favicon.ico" type="image/x-icon" rel="shortcut icon">
		<link href="assets/css/master.css" rel="stylesheet">
		<link href="team/css/main.css" rel="stylesheet">
		<link href="team/css/lightbox.css" rel="stylesheet">
		<link href="team/css/responsive.css" rel="stylesheet">
		<link href="assets/plugins/switcher/css/switcher.css" rel="stylesheet" >
		<link rel="stylesheet" href="mystyle.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css"/>
</head>
<style>
.center-update{
padding-top: 10rem !important;
overflow: auto;
}
</style>
<body>
	<?php
		include("Navbar.php");
	?>
	<div class="row center-update" style="height: 100vh;width: 100%">

		<div class="container mt-4 ">
			<h3 class="ui-title-inner">Notices board</h3>
			<?php
				include("connect_db.php");
				$query="select * from notice";
				$result=mysqli_query($sqli,$query);
				if(mysqli_num_rows($result)>0){
				while($rows=mysqli_fetch_array($result)){

			
			?>
			<div class="col-md-12">
				<div class="card mt-4 p-2">
					<div class="title">
						<h5 class="card-title ui-title-inner"><?php echo "".$rows['title'] ?></h5>
						<p><?php echo "".$rows['description'] ?></p>
						<small class="d-flex justify-content-end"><?php echo "".$rows['post_by'] ?></small>
					</div>
				</div>
				<hr>
			</div>
			<?php
			}
			}

			?>
		</div>
	</div>
	<?php
		include("Footer.php");
	?>

</body>
<script type="text/javascript" src="JQuery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>
</html>