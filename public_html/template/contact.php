<?php

require_once("head-utils.php");
require_once("header.php");
$PAGE_TITLE = "About";

?>

<div class="form-wrap col-xs-12 col-md-7">
	<div class="form-horizontal col-xs-10 col-sm-8">

	<!--START CONTACT FORM-->
		<form id="contactFrom" name="contactForm">
			<!--start NAME form group-->
			<div class="form-group form-group-lg">
				<label for="name" class="control-label">Name</label>
				<div class="input-group">
					<div class="input-group-addon"
						<span class="fa fa-user" aria-hidden="true"></span>
					</div>
					<input type="text" class="form-control" id="name" name="name" placeholder="Name">
				</div>
			</div> <!--end name/>-->
			<!--start EMAIL form group-->
			<div class="form-group form-group-lg">
				<label for="email" class="control-label">Email</label>
				<div class="input-group">
					<div class="input-group-addon"
						<span class="fa fa-mail" aria-hidden="true"></span>
					</div>
					<input type="email" class="form-control" id="email" name="email" placeholder="Email">
				</div>
			</div> <!--end email/>-->


		</form>
	</div>
</div>














<?php
/**
 * sends contents of a simple html form via swiftmailer
 *
 * Bradley Brown <tall.white.ninja@gmail.com>
 */

require_once(dirname(__DIR__) . "/vendor/autoload.php");

if(empty($_POST["email"]) === false && empty($_POST["content"]) === false) {
	try {

		//compose and send the email
		//create swift message
		$swiftMessage = Swift_Message::newInstance();

		$swiftMessage->setFrom([$_POST["email"] => "Inquiry"]);

		$recipients = ["tall.white.ninja@gmail.com"];
		$swiftMessage->setTo($recipients);

		//attach subject line
		$swiftMessage->setSubject("Note from personal website");

		//attach the actual message
		$message = trim($_POST["content"]);
		$message = filter_var($message, FILTER_SANITIZE_STRING);
		$swiftMessage->setBody($message, "text/plain");

		//send email via smtp
		$smtp = Swift_SmtpTransport::newInstance("localhost", 25);
		$mailer = Swift_Mailer::newInstance($smtp);
		$numSent = $mailer->send($swiftMessage, $failedRecipients);

		//throw an exception if the number of people who
		if($numSent !== count($recipients)) {
			// the $failedRecipients parameter passed in the send() method now contains contains an array of the Emails that failed
			throw(new RuntimeException("unable to send email"));
		}

// report a successful send
		echo "<div class=\"alert alert-success\" role=\"alert\">Email successfully sent.</div>";


	} catch(Exception $exception) {
		echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>Oops!</strong> Unable to send email: " . $exception->getMessage() . "</div>";
	}

	$basePath = $_SERVER["SCRIPT_NAME"];
	$lastSlash = strrpos($basePath, "/");
	$basePath = substr($basePath, 0, $lastSlash);
}