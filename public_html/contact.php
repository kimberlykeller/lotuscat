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
			<form id="contactForm" name="contactForm" action="contact.php" method="post">
				<!--start NAME form group-->
				<div class="form-group form-group-lg">
					<label for="name" class="control-label">Name</label>
					<div class="input-group">
						<div class="input-group-addon">
							<span class="fa fa-form fa-user" aria-hidden="true"></span>
						</div>
						<input type="text" class="form-control" id="name" name="name" >
					</div>
				</div> <!--end name/>-->
				<!--start EMAIL form group-->
				<div class="form-group form-group-lg">
					<label for="email" class="control-label">Email</label>
					<div class="input-group">
						<div class="input-group-addon">
							<span class="fa fa-form fa-envelope" aria-hidden="true"></span>
						</div>
						<input type="email" class="form-control" id="email" name="email" >
					</div>
				</div> <!--end email/>-->
				<!--start SUBJECT form group-->
				<div class="form-group form-group-lg">
					<label for="subject" class="control-label">Subject</label>
					<div class="input-group">
						<div class="input-group-addon">
							<span class="fa fa-form fa-pencil" aria-hidden="true"></span>
						</div>
						<input type="text" class="form-control" id="subject" name="subject" >
					</div>
				</div> <!--end subject/>-->
				<!--start MESSAGE form group-->
				<div class="form-group form-group-lg">
					<label for="message" class="control-label">Message</label>
						<textarea class="form-control" rows="4" id="message" name="message" maxlength="256"></textarea>
				</div> <!--end message/>-->
				<!--start buttons-->
				<button type="submit" class="btn btn-lg">Submit</button>
				<button type="reset" class="btn btn-lg">Cancel</button>
			</form>
		</div>
	</div>
</div>
<?php require_once("footer.php") ?>
</body>
</html>

<?php
/**
 * Sends emails from above contact form thorugh Swiftmailer
 *
 * Kimberly Keller <keller.kimberly@gmail.com>
 */

require_once(dirname(__DIR__) . "/vendor/autoload.php");

if(empty($_POST["email"]) === false && empty($_POST["message"]) === false) {
	try {

		//compose and send the email
		//create swift message
		$swiftMessage = Swift_Message::newInstance();

		$swiftMessage->setFrom([$_POST["email"] => "Inquiry"]);

		$recipients = ["keller.kimberly@gmail.com"];
		$swiftMessage->setTo($recipients);

		//attach subject line
		$swiftMessage->setSubject("Lotus Cat Inquiry");

		//filter/sanitize and attach the actual message
		$name = trim($_POST["name"]);
		$name = filter_var($name, FILTER_SANITIZE_STRING);
		$swiftMessage->setBody($name, "text/plain");

		$subject = trim($_POST["subject"]);
		$subject = filter_var($subject, FILTER_SANITIZE_STRING);
		$swiftMessage->setBody($subject, "text/plain");

		$message = trim($_POST["message"]);
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


	} catch(Exception $exception) {
		echo "<div class=\"alert alert-danger\ col-md-6 col-md-offset-3\" role=\"alert\"><strong>Oops!</strong> Unable to send email: " . $exception->getMessage() . "</div>";
	}

	$basePath = $_SERVER["SCRIPT_NAME"];
	$lastSlash = strrpos($basePath, "/");
	$basePath = substr($basePath, 0, $lastSlash);
}













