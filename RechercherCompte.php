 <html>

<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Gestion Operation</title>
<style type="text/css">
	body{ background-image:url(banque.jpg); }
	#kt{font-size: 30px; 
		        background-color: #DEB887;
		        }
		        a{color: black;}
		        h1{margin-left: 100px;
		        	margin-top: 140px;}
		        label{font-size: 20px;
		              margin-left: 100px}
		              #ye{margin-left: 300px;
		              	height: 26px;
		          width: 90px;
		        
		         background-color: #DEB887;
		         font-size: 17px;}
		         #pl{
		              	height: 26px;
		          width: 90px;
		        
		         background-color: #DEB887;
		         font-size: 17px;}
</style>
</head>

<body>

<table table border="1" width="100%" height="40" >
	<tr>
		<td width="230" align="center" id="kt"><a href="SaisirOperation.php">Ajouter Opération</a></td>
		<td width="230" align="center" id="kt"><a href="PointerOperation.php">Pointer Opération </a></td>
		<td width="230"  align="center" id="kt"><a href="RechercherCompte.php">Chercher Compte</a></td>
		<td width="230"  align="center" id="kt"><a href="insert.php">Ajouter Compte</a></td>
	</tr>
</table>

</body>

</html>
<!DOCTYPE html>
<html>
<head>
<title>Formulaire de recherche</title>
</head>
<body>
														
<form method="POST" action="RechercheCompte.php">

   
 <pre>  
   
<h1>Chercher un compte</h1>
                                                          
															
  <label>Saisir le nom du client :  <input type="text" name="Nom_Clt" size="40"></label>
									


                                                 <input type="submit" id="ye" value="chercher" name="chercher" ><input type="reset" id="pl" value="R�tablir" name="B2">
</pre>
	
</form>
</body>
</html>