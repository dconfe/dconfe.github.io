



     <?php
  
		
       if ($_GET['erreur']=="3") 
	       { 
		     echo "Vous avez été déconnecté du service"; 
		   }
  

    // $erreur = Array ( erreur1, erreur2) ;
	
    if (isset($_GET['erreur'])) {
		
       if ($_GET['erreur']=="1") 
	       { 
		     echo "Veuillez saisir un login et un mot de passe"; 
		   }
		   
	   if ($_GET['erreur']=="2")
	      {
			echo "Erreur de login/mot de passe"; 
		  }
	}
		   
   

?>










<html>
<head>

<title> Page2 de login et de mot de passe  </title>
<meta charset="UTF-8" />

</head>

<body>


<table border="1">
<form action="validation1.php" method="POST">
<tr>
   <td> 
        <label for="Login">Login: </label> 
	</td>
	
   <td> 
 <input type="text" name="Login" id="Login" />
   </td>
  
 </tr>
 
 <tr>
   <td> 
        <label for="Motdepasse"> Mot de passe:</label> 
	</td>
	
  <td> 
 <input type="password" name="Motdepasse" id="Motdepasse" />
   </td>
   
  </tr>
  
  <tr>
   <td> </td>
   
   <td>
   <input type="submit" value="Se connecter!" />
   </td>
   
   </form>
   </table>
   
   
   
   </body>
   </html>
   
   
  
  
	







