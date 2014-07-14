<?php
/**
 * Theme support functions
*/

/** Start the session */
if (session_id() === "") session_start();

/** Set Timezone */
date_default_timezone_set('Pacific/Auckland');

//HIDE ADMIN BAR ON SITE
add_filter('show_admin_bar', '__return_false');


// WRAPS AN HTML MESSAGE IN A FORMATTED EMAIL WRAPPER
function formatEmailMessage($message, $subtitle) {
	$newMessage = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title> ' . $subtitle . ' </title>
		<style type="text/css">
	 

			#outlook a {padding:0;}
			body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0; font-family: "Calibri", Arial, sans-serif;} 

			.ExternalClass {width:100%;} 
			.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}
			
			#backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
		


			img {outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;} 
			a img {border:none;} 
			.image_fix {display:block;}


			p {margin: 1em 0;}


			h1, h2, h3, h4, h5, h6 {color: black !important;}

			h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {color: blue !important;}

			h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active {
			color: red !important; 

			h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited {
			color: purple !important; 


			table td {border-collapse: collapse;}

			table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }

			a {color: orange;}


			/***************************************************
			****************************************************
			MOBILE TARGETING
			****************************************************
			***************************************************/
			@media only screen and (max-device-width: 480px) {
				/* Part one of controlling phone number linking for mobile. */
				a[href^="tel"], a[href^="sms"] {
							text-decoration: none;
							color: blue; /* or whatever your want */
							pointer-events: none;
							cursor: default;
						}

				.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
							text-decoration: default;
							color: orange !important;
							pointer-events: auto;
							cursor: default;
						}

			}

			/* More Specific Targeting */

			@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
			/* You guessed it, ipad (tablets, smaller screens, etc) */
				/* repeating for the ipad */
				a[href^="tel"], a[href^="sms"] {
							text-decoration: none;
							color: blue; /* or whatever your want */
							pointer-events: none;
							cursor: default;
						}

				.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
							text-decoration: default;
							color: orange !important;
							pointer-events: auto;
							cursor: default;
						}
			}

			@media only screen and (-webkit-min-device-pixel-ratio: 2) {
			/* Put your iPhone 4g styles in here */ 
			}

			/* Android targeting */
			@media only screen and (-webkit-device-pixel-ratio:.75){
			/* Put CSS for low density (ldpi) Android layouts in here */
			}
			@media only screen and (-webkit-device-pixel-ratio:1){
			/* Put CSS for medium density (mdpi) Android layouts in here */
			}
			@media only screen and (-webkit-device-pixel-ratio:1.5){
			/* Put CSS for high density (hdpi) Android layouts in here */
			}
			/* end Android targeting */

		</style>

		<!-- Targeting Windows Mobile -->
		<!--[if IEMobile 7]>
		<style type="text/css">
		
		</style>
		<![endif]-->   

		<!-- ***********************************************
		****************************************************
		END MOBILE TARGETING
		****************************************************
		************************************************ -->

		<!--[if gte mso 9]>
			<style>
			/* Target Outlook 2007 and 2010 */
			</style>
		<![endif]-->
	</head>
	<body>

	<table cellpadding="0" cellspacing="0" border="0" id="backgroundTable">

			<table cellpadding="0" cellspacing="0" border="0" align="center" width="100%">
				<thead> 
					<tr> 
						<td height="20px" valign="top"></td>
					</tr>
					<tr> 
						<td width="" valign="top"> <img class="image_fix" src="http://www.learningworks.co.nz/logo.png" alt="LearningWorks logo" title="LearningWorks logo" width="165" height="80" /> </td> 
						<br />
						<td width="" valign="middle" align="right" height="80"> <h4> ' . $subtitle . '  </h4> </td> 
					</tr> 
				</thead>
			</table>



				<table cellpadding="0" cellspacing="0" border="0" align="center" width="100%">
					<tr> <td height="40px"> </td> </tr>
					<tr>
						<td width="10px" valign="top"> 
							' . $message . ' 
						</td>
					</tr>

				</table>

				<br />
				<br />


				<table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" style="background-color: #749719">

					<tr> 
						<td height="16px" valign="top"></td>

					</tr>
					<tr valign="middle"> 
						<td width="20px" valign="top"> </td>
						<td style="color:#fff" valign="center" height="28px" > <p style="margin: 0.1em 0 0 !important"> &#169; copyright LearningWorks 2014  </span> </p></td> 
						<td width="245px" valign="top"> </td>
						<td valign="middle" height="28px"> 
							
						</td> 

						<td width="15px" valign="top"> </td>

						<td valign="middle" height="28px"> 
							
						</td>
						<tr> 

						<td height="4px" valign="middle"> <br /> </td>

					</tr>

				</tbody>
			</table>


			</td>
		</tr>
	</table>  

	</body>
	</html>
	';

	// OUTPUTS FORMATTED EMAIL MESSAGE
	return $newMessage;
}

// HANDLES THE CONTACT FORM SUBMISSION BY SENDING THE MESSAGE IN AN EMAIL
// TO LEARNINGWORKS AND A THANK YOU EMAIL TO THE SUBMITTER
function submit_contact_form() {

	if( $_POST['action'] === 'site_contact_form' ) {

		// GET POST VARIABLES
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];


		// GET THE EMAIL ADDRESS FROM THE OPTIONS FIELD THAT THE SUBMITTED MESSAGE
		// SHOULD BE SENT TO
		$to = get_field('email', 'options');

		// EMAIL SUBJECT AND HEADERS
		$subject = 'Website message from ' . $name;

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: ' . $name . ' <' . $email . ">\r\n" .
					'Reply-To: ' . $email . "\r\n" .
					'X-mailer: PHP/' . phpversion();

		$theMessage = '<p> To whom it may concern, </p>
							<p> ' . $message . ' </p>
							<p> Regards <br><br>'
							. $name . '</p>';

		// SET THE FINAL MESSAGE TO BE A FORMATTED EMAIL
		$finalMessage = formatEmailMessage($theMessage, 'New Website Message');

		// SEND THE EMAIL TO LEARNINGWORKS
		if(!wp_mail($to, $subject, $finalMessage, $headers)) {
			echo 'false';
		}


		// SET THE HEADERS FOR THE THANK YOU EMAIL
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		$headers .= 'To: ' . $name . ' <' . $email . '>' . "\r\n";
		$headers .= 'From: LearningWorks Ltd <no-reply@learningworks.co.nz>' . "\r\n";
		$headers .= 'X-mailer: PHP/' . phpversion();

		$theMessage = '<p> Dear ' . $name . ', </p>
						<p> Thank you for contacting LearningWorks. Your enquiry is important to us and has been forwarded to our team for consideration. We expect to be back in touch within 1 business day. </p>
						<p> If your enquiry is urgent please feel free to call us during business hours on <span class="mobile_link">'. get_field('phone', 'options') . '</span> </p> 
						<p> Regards,</p>
						<p> The Team at LearningWorks </p>';

		// SET THE FINAL MESSAGE TO BE A FORMATTED EMAIL
		$finalMessage = formatEmailMessage($theMessage, 'Query Recieved Confirmation');

		// SEND THE THANK YOU EMAIL TO THE PERSON WHO SUBMITTED THE CONTACT FORM
		if(!wp_mail($email, 'Thank you for contacting us!', $finalMessage, $headers)){
			echo 'false';
		}

		// ECHO TRUE SO THE MESSAGE SENT SUCCESS IS DISPLAYED
		echo 'true';

		//SAFE EXIT SO WP DOESN'T RETURN 0
		exit(1);
	}
}

add_action( 'wp_ajax_site_contact_form', 'submit_contact_form');
add_action( 'wp_ajax_nopriv_site_contact_form', 'submit_contact_form');