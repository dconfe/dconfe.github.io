<?php
  session_start();
  if  ($_SESSION['CONNECT'] != 'OK') 
  {
	  echo '<meta http-equiv="Refresh" content="5;URL= login1.php" />';
  }
 ?>
  
<!DOCTYPE html>
<html>
<head>

<title> page d'acceuil </title>
<meta charset="UTF-8" />

</head>

<body>

 <p> Hello <?php echo $_SESSION['Login']; ?> </p>

<a href="validation1.php?afaire=deconnexion">Deconnexion</a>
    
</body>
</html>

