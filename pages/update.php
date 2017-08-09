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

<?php
exit();
}
if (verifyFormToken('form1')) {
	$myemail = 'js.neeb1780@gmail.com';
	$img1c = check_input($_POST['img1c']);
	$img1p = check_input($_POST['img1p']);
	$img2c = check_input($_POST['img2c']);
	$img2p = check_input($_POST['img2p']);
	$img3c = check_input($_POST['img3c']);
	$img3p = check_input($_POST['img3p']);
	$img4c = check_input($_POST['img4c']);
	$img5p = check_input($_POST['img5p']);
	$img6c = check_input($_POST['img6c']);
	$img6p = check_input($_POST['img6p']);
	$img7c = check_input($_POST['img7c']);
	$img7p = check_input($_POST['img7p']);
	$img8c = check_input($_POST['img8c']);
	$img8p = check_input($_POST['img8p']);
	$img9c = check_input($_POST['img9c']);
	$img9p = check_input($_POST['img9p']);
	$img10c = check_input($_POST['img10c']);
	$img10p = check_input($_POST['img10p']);
	$img11c = check_input($_POST['img11c']);
	$img11p = check_input($_POST['img11p']);
	$img12c = check_input($_POST['img12c']);
	$img12p = check_input($_POST['img12p']);
	$img13c = check_input($_POST['img13c']);
	$img13p = check_input($_POST['img13p']);
	$img14c = check_input($_POST['img14c']);
	$img14p = check_input($_POST['img14p']);
	$img15c = check_input($_POST['img15c']);
	$img15p = check_input($_POST['img15p']);
	$img16c = check_input($_POST['img16c']);
	$img16p = check_input($_POST['img16p']);
	$subject = "meganSoo Update";
	$comments = check_input($_POST['message']);
	$message = "$comments
	


001: cat $img1c pos $img1p
D17_03_102: cat $img2c pos $img2p
002: cat $img3c pos $img3p
D17_03_359 (2): cat $img4c pos $img4p
IMG_4593(2): cat $img5c pos $img5p
D17_03_320 (2): cat $img6c pos $img6p
D17_03_197: cat $img7c pos $img7p
IMG_3557: cat $img8c pos $img8p
D17_03_123: cat $img9c pos $img9p
IMG_4165: cat $img10c pos $img10p
003: cat $img11c pos $img11p
creative shot: cat $img12c pos $img12p
D17_03_188: cat $img13c pos $img13c
004: cat $img14c pos $img14p
IMG_4122: cat $img15c pos $img15p
D17_03_115: cat $img16c pos $img16p";
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
	<title>Updates</title>
	<style type="text/css">
		body {
			padding: 20px;
			margin: 0;
		}
		div {
			position: relative;
			display: inline-block;
			width: 288px;
			border: 1px solid black;
			padding: 5px;
		}
		img, input {
			width: 288px;
		}
		textarea {
			width: 100%;
		}
	</style>
</head>
<?php
$newToken = generateFormToken('form1');
?>
<body>
<p>Hi, Megan. Hope you've been having a great day.<br>Remember that I really like coding and my feelings can't be hurt so don't be afraid to submit any changes you'd like done to the site.</p>
<form>
	<input type="hidden" name="token" value="<?php echo $newToken; ?>">
	<textarea name="message" rows="20" placeholder="Updates"></textarea>
	<h2>Images</h2>
	<div>
		<img class="gallery headShot" src="../images/Megan Soo - 001.jpg" />
		<input type="text" name="img1c" placeholder="category">
		<input type="text" name="img1p" placeholder="position">
	</div>
	<div>
		<img class="gallery commercial" src="../images/Megan Soo - D17_03_102 (2).jpg" />
		<input type="text" name="img2c" placeholder="category">
		<input type="text" name="img2p" placeholder="position">
	</div>
	<div>
		<img class="gallery headShot" src="../images/Megan Soo - 002.jpg" />
		<input type="text" name="img3c" placeholder="category">
		<input type="text" name="img3p" placeholder="position">
	</div>
	<div>
		<img class="gallery commercial" src="../images/Megan Soo - D17_03_359 (2).jpg" />
		<input type="text" name="img4c" placeholder="category">
		<input type="text" name="img4p" placeholder="position">
	</div>
	<div>
		<img class="gallery fashion" src="../images/Megan Soo - IMG_4593(2).jpg" />
		<input type="text" name="img5c" placeholder="category">
		<input type="text" name="img5p" placeholder="position">
	</div>
	<div>
		<img class="gallery commercial" src="../images/Megan Soo - D17_03_320 (2).jpg" />
		<input type="text" name="img6c" placeholder="category">
		<input type="text" name="img6p" placeholder="position">
	</div>
		<!-- <img class="gallery commercial" src="images/Megan Soo - D17_03_107.jpg" /> -->
		<!-- <img class="gallery commercial" src="images/Megan Soo - D17_03_370.jpg" /> -->
	<div>
		<img class="gallery commercial" src="../images/Megan Soo - D17_03_197 (2).jpg" />
		<input type="text" name="img7c" placeholder="category">
		<input type="text" name="img7p" placeholder="position">
	</div>
	<div>
		<img class="gallery headShot" src="../images/Megan Soo - IMG_3557 edit(2).jpg" />
		<input type="text" name="img8c" placeholder="category">
		<input type="text" name="img8p" placeholder="position">
	</div>
	<div>
		<img class="gallery commercial" src="../images/Megan Soo - D17_03_123 (2).jpg" />
		<input type="text" name="img9c" placeholder="category">
		<input type="text" name="img9p" placeholder="position">
	</div>
	<div>
		<img class="gallery fashion" src="../images/Megan Soo - IMG_4165(2).jpg" />
		<input type="text" name="img10c" placeholder="category">
		<input type="text" name="img10p" placeholder="position">
	</div>
	<div>
		<img class="gallery headShot" src="../images/Megan Soo - 003.jpg" />
		<input type="text" name="img11c" placeholder="category">
		<input type="text" name="img11p" placeholder="position">
	</div>
	<div>
		<img class="gallery commercial" src="../images/Megan Soo - Megan Soo Creative Shot.jpg" />
		<input type="text" name="img12c" placeholder="category">
		<input type="text" name="img12p" placeholder="position">
	</div>
	<div>
		<img class="gallery commercial" src="../images/Megan Soo - D17_03_188 (2).jpg" />
		<input type="text" name="img13c" placeholder="category">
		<input type="text" name="img13p" placeholder="position">
	</div>
	<div>
		<img class="gallery headShot" src="../images/Megan Soo - 004.jpg" />
		<input type="text" name="img14c" placeholder="category">
		<input type="text" name="img14p" placeholder="position">
	</div>
	<div>
		<img class="gallery fashion" src="../images/Megan Soo - IMG_4122(3).jpg" />
		<input type="text" name="img15c" placeholder="category">
		<input type="text" name="img15p" placeholder="position">
	</div>
	<div>
		<img class="gallery commercial" src="../images/Megan Soo - D17_03_115.jpg" />
		<input type="text" name="img16c" placeholder="category">
		<input type="text" name="img16p" placeholder="position">
	</div>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>