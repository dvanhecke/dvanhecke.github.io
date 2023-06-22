<?php

	$name = isset($_GET['name']) ? $_GET['name'] : false;
	$age = isset($_GET['age']) ? $_GET['age'] : false;

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Testform</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<header>
    <div class="container">
        <a class="logo" href="./">Home</a>
        <nav>
            <ul>
                <li><a class="active" href="./formchecking.php">Form checking</a></li>
                <li><a href="./html_and_php.php">HTML and PHP</a></li>
                <li><a href="./mytasks.php">My tasks</a></li>
                <li><a href="./persistency_11.php">Persistency</a></li>
            </ul>
        </nav>
    </div>
</header>
<main class="container">
<?php

	// Name sent in
	if ($name) {
		echo '<p>Thank you ' . htmlentities($name). '</p>';
	}

	// Age sent in
	else if ($age) {
		echo '<p>Thank you, ' . htmlentities($age). ' year old stranger</p>';
	}

	// Nothing sent in
	else {
		echo '<p>Thank you, stranger</p>';
	}

?>

	<div id="debug">

<?php

	/**
	 * Helper Functions
	 * ========================
	 */

		/**
		 * Dumps a variable
		 * @param mixed $var
		 * @return void
		 */
		function dump($var) {
			echo '<pre>';
			var_dump($var);
			echo '</pre>';
		}


	/**
	 * Main Program Code
	 * ========================
	 */

		// dump $_GET
		dump($_GET);

?>

	</div>
</main>
</body>
</html>
