<?php
session_start();
function generateFormToken($form) {
	$token = md5(uniqid(microtime(), true));
	$_SESSION[$form.'_token'] = $token;
	return $token;
}
function verifyFormToken($form) {
	if (!isset($_SESSION[$form.'_token'])) {
		return false;
	}
	if (!isset($_POST['token'])) {
		return false;
	}
	if ($_SESSION[$form.'_token'] !== $_POST['token']) {
		return false;
	}
	return true;
}
function check_input($data, $problem='') {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	if ($problem && strlen($data) == 0)
	{
		show_error($problem);
	}
	return $data;
}
function show_error($myError) {
?>
	<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Whoops...</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../styleSheets/css/indexStyles.css">
	</head>
	<body>
	<div style="position: relative; top: 50%; left: 50%; -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%);">
		<h1 style="font-size: 24px; text-align: center; padding: 30px 0;">Whoops...</h1>
		<p>Looks like you <?php echo $myError ?>.</p>
		<p>No worries. Just go back and double check.</p>
	</div>
	</body>
	</html>
<?php
exit();
}
if (verifyFormToken('form1')) {
	$myemail = 'megansoo08@gmail.com';
	$name = check_input($_POST['name'], "forgot to tell me your name");
	$email = check_input($_POST['email']);
	$subject = check_input($_POST['subject'], "forgot to add a subject line");
	$comments = check_input($_POST['message'], "forgot to type your message");
	if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
	{
	    show_error("gave me an invalid email address");
	}
	$message = "$comments
	


$name
$email";
	mail($myemail, $subject, $message);
	header('Location: messageSent.html');
	exit();
} 
else {
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Megan Soo | Contact</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../styleSheets/css/indexStyles.css">
</head>
<?php
$newToken = generateFormToken('form1');
?>
<body>
<div class="contactSect">
	<div class="container">
		<span class="headBefore contactHeadBefore"></span>
	</div>
	<h2 class="sectionHead contactHead">Contact</h2>
	<div class="greetingCont">
		<div class="greeting">
			<p class="emphasize">Say Hi.</p>
			<p>I'd love to hear from you!</p>
			<div class="icons">
				<a class="facebook" href="https://web.facebook.com/profile.php?id=1049235787">
					<svg class="icon" height="1.70667in" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" viewBox="0 0 8379 8379" width="1.70667in" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><style type="text/css">
				   <![CDATA[
				    .fil0 {fill:none}
				    .fil1 {fill:black;fill-rule:nonzero}
				   ]]>
				  </style></defs><g id="Layer_x0020_1"><rect class="fil0" height="8379" width="8379"/><path class="fil1" d="M5111 3490l-627 0 0 -412c0,-154 102,-190 174,-190 72,0 443,0 443,0l0 -680 -610 -3c-677,0 -832,507 -832,832l0 453 -392 0 0 701 392 0c0,899 0,1983 0,1983l825 0c0,0 0,-1095 0,-1983l556 0 71 -701z"/></g></svg>
			  </a>
			  <a class="instagram" href="https://www.instagram.com/megansoo_/">
				  <svg class="icon" height="1.70667in" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" viewBox="0 0 7630 7630" width="1.70667in" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><style type="text/css">
				   <![CDATA[
				    .fil0 {fill:none}
				    .fil1 {fill:black;fill-rule:nonzero}
				   ]]>
				  </style></defs><g id="Layer_x0020_1"><rect class="fil0" height="7630" width="7630"/><g id="_799082544"><path class="fil1" d="M5270 4596c0,377 -306,683 -683,683l-1544 0c-377,0 -684,-306 -684,-683l0 -1544c0,-378 307,-684 684,-684l1544 0c377,0 683,306 683,684l0 1544zm-701 -2565l-1508 0c-569,0 -1030,461 -1030,1030l0 1508c0,569 461,1030 1030,1030l1508 0c569,0 1030,-461 1030,-1030l0 -1508c0,-569 -461,-1030 -1030,-1030z"/><path class="fil1" d="M3815 4424c-332,0 -600,-269 -600,-600 0,-332 268,-600 600,-600 331,0 600,268 600,600 0,331 -269,600 -600,600zm0 -1526c-512,0 -926,414 -926,926 0,511 414,926 926,926 511,0 926,-415 926,-926 0,-512 -415,-926 -926,-926z"/><path class="fil1" d="M4772 2647c-119,0 -216,97 -216,216 0,119 97,215 216,215 119,0 215,-96 215,-215 0,-119 -96,-216 -215,-216z"/></g></g></svg>
			  </a>
			  <a class="twitter" href="https://twitter.com/megansoo?lang=en">
				  <svg class="icon" height="1.70667in" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" viewBox="0 0 9291 9291" width="1.70667in" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><style type="text/css">
				   <![CDATA[
				    .fil0 {fill:none}
				    .fil1 {fill:black;fill-rule:nonzero}
				   ]]>
				  </style></defs><g id="Layer_x0020_1"><rect class="fil0" height="9291" width="9291"/><path class="fil1" d="M6852 3277c-162,72 -336,120 -520,142 188,-112 331,-289 399,-501 -178,106 -373,180 -576,220 -165,-176 -400,-286 -660,-286 -500,0 -906,405 -906,906 0,70 8,140 24,206 -753,-38 -1420,-398 -1867,-946 -78,134 -122,289 -122,455 0,314 160,592 403,754 -144,-5 -285,-43 -411,-113l0 11c0,439 312,805 727,888 -77,21 -156,32 -239,32 -58,0 -115,-6 -170,-16 115,359 449,621 846,628 -311,243 -701,388 -1125,388 -73,0 -145,-4 -216,-13 401,257 877,407 1388,407 1665,0 2576,-1380 2576,-2576 0,-39 -1,-78 -3,-117 178,-128 331,-287 452,-469z"/></g></svg>
			  </a>
			  <a class="youTube" href="https://www.youtube.com/user/DanceEnt101">
			  	<svg class="icon" height="1.70667in" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" viewBox="0 0 7630 7630" width="1.70667in" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><style type="text/css">
				   <![CDATA[
				    .fil0 {fill:none}
				    .fil1 {fill:black;fill-rule:nonzero}
				   ]]>
				  </style></defs><g id="Layer_x0020_1"><rect class="fil0" height="7630" width="7630"/><g id="_899316136"><g><path class="fil1 you" d="M4035 3421c58,0 137,-30 219,-127l0 112 190 0 0 -1019 -190 0 0 774c-23,29 -74,76 -111,76 -41,0 -51,-28 -51,-68l0 -782 -189 0 0 852c0,101 31,182 132,182z"/><path class="fil1 you" d="M3192 3152c0,180 94,273 278,273 152,0 272,-102 272,-273l0 -499c0,-160 -119,-274 -272,-274 -167,0 -278,110 -278,274l0 499zm195 -483l0 0c0,-55 26,-97 79,-97 58,0 83,40 83,97l0 475c0,55 -28,96 -79,96 -53,0 -83,-43 -83,-96l0 -475z"/><polygon class="fil1 you" points="2740,3406 2953,3406 2953,2846 3202,2025 2985,2025 2848,2577 2701,2025 2486,2025 2740,2846 "/></g><g><path class="fil1 tube" d="M4699 3638l-2234 0c-240,0 -434,195 -434,435l0 1098c0,240 194,434 434,434l2234 0c240,0 434,-194 434,-434l0 -1098c0,-240 -194,-435 -434,-435zm-1936 1642l0 0 -203 0 0 -1125 -211 0 0 -191 624 0 0 191 -210 0 0 1125zm723 0l0 0 -181 0 0 -107c-33,39 -68,69 -103,90 -98,56 -231,55 -231,-143l0 -811 180 0 0 744c0,39 10,66 48,66 35,0 84,-45 106,-73l0 -737 181 0 0 971zm695 -201l0 0c0,120 -45,213 -165,213 -66,0 -122,-24 -172,-87l0 75 -182 0 0 -1316 182 0 0 424c41,-50 96,-91 161,-91 132,0 176,112 176,243l0 539zm667 -262l0 0 -345 0 0 183c0,73 6,136 78,136 77,0 81,-51 81,-136l0 -67 186 0 0 73c0,187 -81,300 -271,300 -172,0 -260,-125 -260,-300l0 -436c0,-168 111,-285 274,-285 173,0 257,110 257,285l0 247z"/><path class="fil1 tube" d="M4583 4455c-67,0 -80,47 -80,113l0 99 159 0 0 -99c0,-65 -14,-113 -79,-113z"/><path class="fil1 tube" d="M3881 4461c-12,6 -25,16 -37,29l0 605c15,16 29,27 43,34 29,15 72,16 92,-10 11,-13 16,-36 16,-67l0 -501c0,-33 -7,-58 -19,-74 -22,-29 -63,-32 -95,-16z"/></g></g></g></svg>
			  </a>
			</div>
		</div>
	</div>
	<div class="formCont">
		<div class="form">
			<p class="error"></p>
			<form action="contact.php" id="form" method="post">
				<input type="hidden" name="token" value="<?php echo $newToken; ?>">
				<input class="input" type="text" name="name" placeholder="Name">
				<input class="input" type="text" name="email" placeholder="Email">
				<input class="input" type="text" name="subject" placeholder="Subject">
				<textarea class="input" name="message" rows="6" placeholder="Message"></textarea>
				<input id="submit" class="submit" type="submit" name="submit" value="Send">
			</form>
		</div>
	</div>
</div>
<div class="footer">
	<div class="homeCont">
		<a href="../index.html">
			<svg class="home" height="512px" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
			<![CDATA[
				.st0{display:inline;}
				.st1{fill:none;stroke:#000000;stroke-width:16;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
				.st2{display:none;}
			]]>
			</style><g class="st2" id="layer_copy"><g class="st0"><polygon class="st1" points="256,62 473,279 256,62 39,279   "/><path class="st1" d="M414,295v155H98V295"/></g></g><g id="layer_copy_2"><g><path d="M473,287c-2.048,0-4.095-0.781-5.657-2.343L256,73.313L44.657,284.657c-3.124,3.123-8.189,3.123-11.313,0    C31.781,283.095,31,281.048,31,279s0.781-4.095,2.343-5.657l217-217c3.125-3.124,8.19-3.123,11.314,0l217,217    c1.562,1.563,2.343,3.609,2.343,5.657s-0.781,4.095-2.343,5.657C477.095,286.219,475.048,287,473,287z"/></g><g><path d="M414,458H98c-4.418,0-8-3.582-8-8V295c0-4.418,3.582-8,8-8s8,3.582,8,8v147h300V295c0-4.418,3.582-8,8-8s8,3.582,8,8v155    C422,454.418,418.418,458,414,458z"/></g></g></svg>
		</a>
	</div>
	<span class="footPart left"></span>
	<div class="icons footIcons">
		<a class="facebook" href="https://web.facebook.com/profile.php?id=1049235787">
			<svg class="icon" height="1.70667in" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" viewBox="0 0 8379 8379" width="1.70667in" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><style type="text/css">
		   <![CDATA[
		    .fil0 {fill:none}
		    .fil1 {fill:black;fill-rule:nonzero}
		   ]]>
		  </style></defs><g id="Layer_x0020_1"><rect class="fil0" height="8379" width="8379"/><path class="fil1" d="M5111 3490l-627 0 0 -412c0,-154 102,-190 174,-190 72,0 443,0 443,0l0 -680 -610 -3c-677,0 -832,507 -832,832l0 453 -392 0 0 701 392 0c0,899 0,1983 0,1983l825 0c0,0 0,-1095 0,-1983l556 0 71 -701z"/></g></svg>
	  </a>
	  <a class="instagram" href="https://www.instagram.com/megansoo_/">
		  <svg class="icon" height="1.70667in" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" viewBox="0 0 7630 7630" width="1.70667in" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><style type="text/css">
		   <![CDATA[
		    .fil0 {fill:none}
		    .fil1 {fill:black;fill-rule:nonzero}
		   ]]>
		  </style></defs><g id="Layer_x0020_1"><rect class="fil0" height="7630" width="7630"/><g id="_799082544"><path class="fil1" d="M5270 4596c0,377 -306,683 -683,683l-1544 0c-377,0 -684,-306 -684,-683l0 -1544c0,-378 307,-684 684,-684l1544 0c377,0 683,306 683,684l0 1544zm-701 -2565l-1508 0c-569,0 -1030,461 -1030,1030l0 1508c0,569 461,1030 1030,1030l1508 0c569,0 1030,-461 1030,-1030l0 -1508c0,-569 -461,-1030 -1030,-1030z"/><path class="fil1" d="M3815 4424c-332,0 -600,-269 -600,-600 0,-332 268,-600 600,-600 331,0 600,268 600,600 0,331 -269,600 -600,600zm0 -1526c-512,0 -926,414 -926,926 0,511 414,926 926,926 511,0 926,-415 926,-926 0,-512 -415,-926 -926,-926z"/><path class="fil1" d="M4772 2647c-119,0 -216,97 -216,216 0,119 97,215 216,215 119,0 215,-96 215,-215 0,-119 -96,-216 -215,-216z"/></g></g></svg>
	  </a>
	  <a class="twitter" href="https://twitter.com/megansoo?lang=en">
		  <svg class="icon" height="1.70667in" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" viewBox="0 0 9291 9291" width="1.70667in" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><style type="text/css">
		   <![CDATA[
		    .fil0 {fill:none}
		    .fil1 {fill:black;fill-rule:nonzero}
		   ]]>
		  </style></defs><g id="Layer_x0020_1"><rect class="fil0" height="9291" width="9291"/><path class="fil1" d="M6852 3277c-162,72 -336,120 -520,142 188,-112 331,-289 399,-501 -178,106 -373,180 -576,220 -165,-176 -400,-286 -660,-286 -500,0 -906,405 -906,906 0,70 8,140 24,206 -753,-38 -1420,-398 -1867,-946 -78,134 -122,289 -122,455 0,314 160,592 403,754 -144,-5 -285,-43 -411,-113l0 11c0,439 312,805 727,888 -77,21 -156,32 -239,32 -58,0 -115,-6 -170,-16 115,359 449,621 846,628 -311,243 -701,388 -1125,388 -73,0 -145,-4 -216,-13 401,257 877,407 1388,407 1665,0 2576,-1380 2576,-2576 0,-39 -1,-78 -3,-117 178,-128 331,-287 452,-469z"/></g></svg>
	  </a>
	  <a class="youTube" href="https://www.youtube.com/user/DanceEnt101">
	  	<svg class="icon" height="1.70667in" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" viewBox="0 0 7630 7630" width="1.70667in" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><style type="text/css">
		   <![CDATA[
		    .fil0 {fill:none}
		    .fil1 {fill:black;fill-rule:nonzero}
		   ]]>
		  </style></defs><g id="Layer_x0020_1"><rect class="fil0" height="7630" width="7630"/><g id="_899316136"><g><path class="fil1 you" d="M4035 3421c58,0 137,-30 219,-127l0 112 190 0 0 -1019 -190 0 0 774c-23,29 -74,76 -111,76 -41,0 -51,-28 -51,-68l0 -782 -189 0 0 852c0,101 31,182 132,182z"/><path class="fil1 you" d="M3192 3152c0,180 94,273 278,273 152,0 272,-102 272,-273l0 -499c0,-160 -119,-274 -272,-274 -167,0 -278,110 -278,274l0 499zm195 -483l0 0c0,-55 26,-97 79,-97 58,0 83,40 83,97l0 475c0,55 -28,96 -79,96 -53,0 -83,-43 -83,-96l0 -475z"/><polygon class="fil1 you" points="2740,3406 2953,3406 2953,2846 3202,2025 2985,2025 2848,2577 2701,2025 2486,2025 2740,2846 "/></g><g><path class="fil1 tube" d="M4699 3638l-2234 0c-240,0 -434,195 -434,435l0 1098c0,240 194,434 434,434l2234 0c240,0 434,-194 434,-434l0 -1098c0,-240 -194,-435 -434,-435zm-1936 1642l0 0 -203 0 0 -1125 -211 0 0 -191 624 0 0 191 -210 0 0 1125zm723 0l0 0 -181 0 0 -107c-33,39 -68,69 -103,90 -98,56 -231,55 -231,-143l0 -811 180 0 0 744c0,39 10,66 48,66 35,0 84,-45 106,-73l0 -737 181 0 0 971zm695 -201l0 0c0,120 -45,213 -165,213 -66,0 -122,-24 -172,-87l0 75 -182 0 0 -1316 182 0 0 424c41,-50 96,-91 161,-91 132,0 176,112 176,243l0 539zm667 -262l0 0 -345 0 0 183c0,73 6,136 78,136 77,0 81,-51 81,-136l0 -67 186 0 0 73c0,187 -81,300 -271,300 -172,0 -260,-125 -260,-300l0 -436c0,-168 111,-285 274,-285 173,0 257,110 257,285l0 247z"/><path class="fil1 tube" d="M4583 4455c-67,0 -80,47 -80,113l0 99 159 0 0 -99c0,-65 -14,-113 -79,-113z"/><path class="fil1 tube" d="M3881 4461c-12,6 -25,16 -37,29l0 605c15,16 29,27 43,34 29,15 72,16 92,-10 11,-13 16,-36 16,-67l0 -501c0,-33 -7,-58 -19,-74 -22,-29 -63,-32 -95,-16z"/></g></g></g></svg>
	  </a>
	</div>
	<span class="footPart right"></span>
	<div class="footNavCont">
		<a href="../index.html#landing"><span class="footNav footContact">Home</span></a>
		<a href="../index.html#motion"><span class="footNav footMotion">Motion</span></a>
		<a href="../index.html#stills"><span class="footNav footStills">Stills</span></a>
		<a href="../index.html#about"><span class="footNav footAbout">About</span></a>
	</div>
	<p class="copyright">&#169 2017 Megan Soo</p>
</div>
<script type="text/javascript" src="../js/contact.js"></script>
</body>
</html>