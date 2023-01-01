<?php
switch($page) {
	case "index":
		echo '<div class="navMain">
			<div class="navActive">Home</div>
			<div class="navItem"><a href="index.php?page=about">About</a></div>
			<div class="navItem"><a href="index.php?page=work">Work</a></div>
			<div class="navItem"><a href="index.php?page=contact">Contact</a></div>
			<div class="navItem"><a href="index.php?page=entries">Entries</a></div>
		</div>
		<div class="clearFloat"></div>';
		break;
	case "about":
		echo '<div class="navMain">
			<div class="navItem"><a href="index.php?page=index">Home</a></div>
			<div class="navActive">About</div>
			<div class="navItem"><a href="index.php?page=work">Work</a></div>
			<div class="navItem"><a href="index.php?page=contact">Contact</a></div>
			<div class="navItem"><a href="index.php?page=entries">Entries</a></div>
		</div>
		<div class="clearFloat"></div>';
		break;
	case "work":
		echo '<div class="navMain">
			<div class="navItem"><a href="index.php?page=index">Home</a></div>
			<div class="navItem"><a href="index.php?page=about">About</a></div>
			<div class="navActive">Work</div>
			<div class="navItem"><a href="index.php?page=contact">Contact</a></div>
			<div class="navItem"><a href="index.php?page=entries">Entries</a></div>
		</div>
		<div class="clearFloat"></div>';
		break;
	case "contact":
		echo '<div class="navMain">
			<div class="navItem"><a href="index.php?page=index">Home</a></div>
			<div class="navItem"><a href="index.php?page=about">About</a></div>
			<div class="navItem"><a href="index.php?page=work">Work</a></div>
			<div class="navActive">Contact</div>
			<div class="navItem"><a href="index.php?page=entries">Entries</a></div>
		</div>
		<div class="clearFloat"></div>';
		break;
	case "entries":
		echo '<div class="navMain">
			<div class="navItem"><a href="index.php?page=index">Home</a></div>
			<div class="navItem"><a href="index.php?page=about">About</a></div>
			<div class="navItem"><a href="index.php?page=work">Work</a></div>
			<div class="navItem"><a href="index.php?page=contact">Contact</a></div>
			<div class="navActive">Entries</div>
		</div>
		<div class="clearFloat"></div>';
		break;
	default:
		echo '<div class="navMain">
			<div class="navActive">Home</div>
			<div class="navItem"><a href="index.php?page=about">About</a></div>
			<div class="navItem"><a href="index.php?page=work">Work</a></div>
			<div class="navItem"><a href="index.php?page=contact">Contact</a></div>
			<div class="navItem"><a href="index.php?page=entries">Entries</a></div>
		</div>
		<div class="clearFloat"></div>';
		break;
}
?>