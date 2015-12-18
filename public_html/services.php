<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Lotus Cat";
/*load head-utils.php*/
require_once("head-utils.php");
require_once("header.php");
$PAGE_TITLE = "Services";

?>

<body class="sfooter">
	<main class="sfooter-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-6">
					<h1 class="text-center animated fadeInDown">Services</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 content-box">
					<img  src="<?php echo $PREFIX; ?>lib/img/renly.jpg" class="custom-image img-rounded img-responsive"/>
				</div>
				<div class="col-sm-6 content-box">
					<h4>
						Join Me!
					</h4>
					<p>Yoga in the park, Sunday at 11am.</p>

				</div>
			</div>
		</div>
	</main>
	<?php require_once("footer.php") ?>
</body>
</html>