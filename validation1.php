<?php
session_start();
  $_SESSION['CONNECT']='OK';
  $_SESSION['Login']='crepo';
  $_SESSION['Motdepasse']='nutella';
  
?>  

  
<!DOCTYPE html>

<html>
<body>
<?php

require('config.php');  

if (empty($_POST['Login'])|| empty($_POST['Motdepasse']))    ////if (($_POST['Login']==null) OR ($_POST['Motdepasse']==null)) 
{
echo'<meta http-equiv="Refresh" content="5;URL= login1.php?erreur=1" />';  
}
else if (($_POST['Login'] == 'crepo') AND ($_POST['Motdepasse'] == 'nutella'))
 {
     echo '<meta http-equiv="Refresh" content="5;URL= acceuil.php" />';
	 //header('Location:../tpsessionrepris/acceuil.php');
 } 
else
 {	 
     echo '<meta http-equiv="Refresh" content="5;URL= login1.php?erreur=2" />';
}


	
if ($_GET['afaire']=="deconnexion") 
	   
	   { 
	      
		  echo'<meta http-equiv="Refresh" content="5;URL= login1.php?erreur=3" />';
		  
		  session_destroy();
		  
	   }
	   

 

?>

</body>
</html>










