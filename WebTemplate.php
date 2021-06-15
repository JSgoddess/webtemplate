<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Web Template Project</title>
</head>
<body>
	<?php include("inc_header.html"); ?>
	<div style="width:20%; text-align: center; float: left;">
		<?php include("inc_buttonnav.html"); ?>
	</div>

	<?php
		if (isset($_GET['content'])){
			switch ($_GET["content"]) {
				case "About Me":
					include("inc_about.html");
					break;
				case "Contact ME":
					include("inc_contact.html");
					break;
				default:
				include("inc_home.html");
				break;

					}		
		}
		else {
			include("inc_home.html");
		}
	?>

	<?php include("inc_footer.php"); ?>
</body>
</html>