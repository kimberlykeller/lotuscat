<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Lotus Cat";
/*load head-utils.php*/
require_once("head-utils.php");
require_once("header.php");
$PAGE_TITLE = "Home";

?>

<body class="sfooter">
	<main class="sfooter-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 content-box">
					<img src="<?php echo $PREFIX; ?>lib/img/lotus.png" class="img-responsive"/>
				</div>
				<div class="col-sm-6 content-box">
					<h1 class="text-center animated fadeInDown">Move. Breath. Lift.</h1>
				</div>
			</div>
		</div>
	</main>
	<?php require_once("footer.php") ?>
</body>
</html>