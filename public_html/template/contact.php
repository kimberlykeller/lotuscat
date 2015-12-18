<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Lotus Cat";
/*load head-utils.php*/
require_once("head-utils.php");
require_once("header.php");
$PAGE_TITLE = "Contact";

?>

<div class="container">
	<div class="form-wrap col-xs-12 col-md-6 col-md-offset-3">
		<div class="form-horizontal col-xs-12 col-sm-10 col-sm-offset-1">
			<h1>Contact Me</h1>
		<!--START CONTACT FORM-->
			<form id="contactForm" name="contactForm">
				<!--start NAME form group-->
				<div class="form-group form-group-lg">
					<label for="name" class="control-label">Name</label>
					<div class="input-group">
						<div class="input-group-addon">
							<span class="fa fa-user" aria-hidden="true"></span>
						</div>
						<input type="text" class="form-control" id="name" name="name" >
					</div>
				</div> <!--end name/>-->
				<!--start EMAIL form group-->
				<div class="form-group form-group-lg">
					<label for="email" class="control-label">Email</label>
					<div class="input-group">
						<div class="input-group-addon">
							<span class="fa fa-envelope" aria-hidden="true"></span>
						</div>
						<input type="email" class="form-control" id="email" name="email" >
					</div>
				</div> <!--end email/>-->
				<!--start SUBJECT form group-->
				<div class="form-group form-group-lg">
					<label for="subject" class="control-label">Subject</label>
					<div class="input-group">
						<div class="input-group-addon">
							<span class="fa fa-pencil" aria-hidden="true"></span>
						</div>
						<input type="text" class="form-control" id="subject" name="subject" >
					</div>
				</div> <!--end subject/>-->
				<!--start MESSAGE form group-->
				<div class="form-group form-group-lg">
					<label for="message" class="control-label">Message</label>
						<textarea class="form-control" rows="4"  maxlength="256"></textarea>
				</div> <!--end message/>-->
				<!--start buttons-->
				<button type="submit" class="btn btn-lg">Submit</button>
				<button type="reset" class="btn btn-lg">Cancel</button>


			</form>
		</div>
	</div>
</div>













