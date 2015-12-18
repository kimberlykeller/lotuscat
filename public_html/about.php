<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Lotus Cat";
/*load head-utils.php*/
require_once("head-utils.php");
require_once("header.php");
$PAGE_TITLE = "About";

?>

<body class="sfooter">
	<main class="sfooter-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-6">
					<h1 class="text-center animated fadeInDown">About Me</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 content-box">
					<img id="renly" src="<?php echo $PREFIX; ?>lib/img/coffee.jpg" class="img-rounded img-responsive custom-image"/>
				</div>
				<div class="col-sm-6 content-box">
					<p>I'm a cat lover, a trekkie, and lover of movement. </p>

				</div>
			</div>
		</div>
	</main>
	<?php require_once("footer.php") ?>
</body>
</html>