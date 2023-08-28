<html>

<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Gestion Operation</title>
</head>

<body>

<table table border="1" width="100%" height="40" >
	<tr>
		<td width="230"  align="center" id="rt" ><a href="SaisirOperation.php">Ajouter Opération</a></td>
		<td width="230"  align="center" id="rt"><a href="PointerOperation.php">Pointer Opération </a></td>
		<td width="230" align="center" id="rt" ><a href="RechercherCompte.php">Chercher Compte</a></td>
		<td width="230"  align="center" id="rt"><a href="insert.php">Ajouter Compte</a></td>
	</tr>
</table>

</body>

</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ajouter</title>
	<style type="text/css">
		body{ background-image:url(banque.jpg); }
		#ty{margin-left: 200px;
		      margin-top:196px;
		    }
		    #rt{font-size: 30px; 
		        background-color: #DEB887;
		        }
		        a{color: black;}
		   #kj{font-family: italic;
		     font-weight: bold;
		   font-size: 26px;}
           
		     td:hover{color: white;}
		     #t1{margin-left: 400px;
		           height:29px; 
		          width: 200px;}
		     .t2{height: 26px;
		          width: 90px;
		         margin-top: 100px;
		         background-color: #DEB887;
		         font-size: 17px;
		      }
		       
		       #t3{margin-left: 220px;}
		       option{font-size: 13px;
		             font-weight: bold;}

	</style>
	</head>
<body>
	 		<form method="POST" action="insert.php" enctype="multipart/form-data" name="t4">
	 		<table  id="ty">
	 			<tr><td id="kj">Numero de compte:</td>
	 			<td><input type="text"  name="nombre" id="t1"  value="326793683" >
	 			</td></tr>
	 			<tr><td id="kj">Numero client:</td>
	 			<td><input type="text"  name="num" id="t1" value="2368930740" >
	 			</td></tr>
	 			<tr><td id="kj">Nom de client:</td>
	 			<td><input type="text"  name="nom" id="t1">
	 			</td></tr>
	 			<tr><td id="kj"> Type de compte:</td>
	 			 <td ><select  name="list1" id="t1" >
	 				<option value="Epargne">Epargne</option>
	 				<option value="Chèque">Chèque</option>
	 			</select>
	 			</td>
	 			</tr>
	 			<tr><td id="kj">solde Bancaire:</td>
	 			<td><input type="text"  name="solde" id="t1">
	 			</td></tr>
	 			<tr><td id="kj">Solde reel:</td>
	 			<td><input type="text"  name="solderel" id="t1">
	 			</td></tr>
	 			<tr><td></td> <td id="kj"><input type="submit" name="valider" value="valider"  class="t2 " id="t3">
	 			  <input type="reset" name="annuler" value="annuler" class="t2" id="t4"></td>
	 			</table>
	 		</form>
	 	<?php 
   if(isset($_POST['valider'])){
   	 $val3="";
     $val1=$_POST['nombre'];
     $val2=$_POST['num'];
     //echo $val2;
     $val3=$_POST['nom'];
     $val4=$_POST['list1'];
     //echo $val4;
     $val5=$_POST['solde'];
      $val6=$_POST['solderel'];
     //echo $val6;
     $val7="SELECT MAX(Num_Cpt) as MAX FROM compte";
     $val8="SELECT MAX(Num_Clt) as MAXclient FROM compte";


    $connexion=mysqli_connect("localhost","root","","banque");
    if(!$connexion){echo "desole,la connexion est imposible";exit;}
    $nombre = mysqli_real_escape_string($connexion, $val1); 
    $num = mysqli_real_escape_string($connexion, $val2);   
    $nom = mysqli_real_escape_string($connexion, $val3);   
    $tycompt = mysqli_real_escape_string($connexion, $val4);   
    $solde = mysqli_real_escape_string($connexion, $val5);   
    $solderel = mysqli_real_escape_string($connexion, $val6);     
    if(!mysqli_select_db($connexion,"banque")){echo "desole,acces a la base est imposible";exit;}
    $requete=mysqli_query($connexion,$val7);
    if (!$requete) {
    echo "Erreur: " . mysqli_error($connexion);
} else {
    $sql = mysqli_fetch_assoc($requete);
    $max = $sql['MAX'] + 1;
    echo $max;

}
    
    $requete=mysqli_query($connexion,$val8);
    if (!$requete) {
    echo "Erreur: " . mysqli_error($connexion);
} else {
    $sql = mysqli_fetch_assoc($requete);
    $maxclient = $sql['MAXclient'] + 1;

}
    $val1= $max;
    $val2 = $maxclient; 
    if($val5<1000 || $val6<1000){
    	echo'<script>alert("tu doit saisie un solde superieure a 1000 !!!!");</script>';
    }else{
   $requete=mysqli_query($connexion,"INSERT INTO compte VALUES('$val1','$val2','$val3','$val4','$val5','$val6')");}
    //$requete=mysqli_query($connexion,'$requete');
    if(!$requete){
      echo "il ya un erreur" . mysqli_error($connexion);
  } 
    
    mysqli_close($connexion);
}

?>
</body>
</html>
