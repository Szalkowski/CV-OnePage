	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen, projection" />
	<body>
<?php
	$dane = $_POST['dane'];
	$mail = $_POST['mail'];
	$wiad = $_POST['text'];
	$headers = "From: maciej@macszalkowski.bialystok.pl\r\n";
	$headers .= "Reply-To: $mail\r\n";
	
    if (mail("mac.szalkowski@gmail.com", $dane, $wiad,$headers))
	{ 
		echo "Wiadomość została wysłana";
		Header("Refresh: 1; URL = index.html");
	}
    else
	{
		throw new Exception('Wysłanie e-maila nie powiodło się');
	}
?>

</body>