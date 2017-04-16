<?php
// error_reporting('E_ERROR');
mail('sara@doggie-zen.se', 'WP SQL anslutningsproblem på ' . $_SERVER['HTTP_HOST'], 'Detta är ett automatgenererat meddelande från wordpress db-error-filen.');
?>
<html>
	<head>
		<title>Tillfälligt fel</title>
	</head>
	<body>
		<h1><?php echo $_SERVER['HTTP_HOST']; ?> går inte att nås just nu.</h1>
		<p>Webbplatsanvarig har meddelats om felet. Försök igen senare.</p>
	</body>
</html>