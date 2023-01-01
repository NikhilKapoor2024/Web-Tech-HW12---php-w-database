<?php
echo '<!doctype html>';
echo '<html>';
	echo '<head>';
		echo '<meta charset="utf-8">';
		echo '<title>Homepage</title>';
		echo '<link href="assets/css/style.css" rel="stylesheet" type="text/css">';
	echo '</head>';
	
	echo '<body>';
		echo '<div class="banner">Nikhil Kapoor\'s Website</div>';
	if (isset($_REQUEST['page'])) {
		$page=$_REQUEST['page']; // whatever is in the URL
	}
	else {
		$page="index.php"; // upon first load
	}
	include("navigation.php");

	switch($page) {
		case "index":
			include("home.php");
			break;
		case "contact":
			include("contact.php");
			break;
		case "entries":
			include("entries.php");
			break;
		case "about":
			include("about.php");
			break;
		case "work":
			include("work.php");
			break;
		default:
			include("home.php");
			break;
	}
	echo '</body></html>';
?>