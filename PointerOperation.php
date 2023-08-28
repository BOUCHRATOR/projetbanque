 <html>

<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Gestion Operation</title>
<style type="text/css">
  body{ background-image:url(banque1.jpeg); }
  #tk{font-size: 30px; 
            background-color: #C0C0C0;
            }
            a{color: black;}
</style>
</head>

<body>

<table table border="1" width="100%" height="40"   >
  <tr>
    <td width="300" align="center" id="tk"><a href="SaisirOperation.php">Ajouter Opération</a></td>
    <td width="300" align="center" id="tk"><a href="PointerOperation.php">Pointer Opération </a></td>
    <td width="300"  align="center" id="tk"><a href="RechercherCompte.php">Chercher Compte</a></td>
    <td width="300"  align="center" id="tk"><a href="insert.php">Ajouter Compte</a></td>
  </tr>
</table>

</body>

</html>

<html>
  <head>
    <title>modification de donn�es en PHP :: partie 1</title>
  </head>
<body>
                                                                                                                                 
                                                                                                                        
                                                                                                                        
  <table border="1" width="100%" bordercolorlight="#FFFFF" bordercolordark="#FFFFFF">                                    
  <tr>                                                                                                                   
    <td width="194" bgcolor="#C0C0C0"> Num�ro op�ration        </td>                                                     
    <td width="164" bgcolor="#C0C0C0"> Num�ro Compte       </td>                                                          
    <td width="164" bgcolor="#C0C0C0"> Type Op�ration    </td>                                                            
    <td width="164" bgcolor="#C0C0C0"> Date Op�ation    </td>
    <td width="194" bgcolor="#C0C0C0"> Validation    </td>
    <td width="164" bgcolor="#C0C0C0"> Montant Op�ation      </td>
    <td width="164" bgcolor="#C0C0C0"> Date Valeur      </td>
    <td width="164" bgcolor="#C0C0C0"> Modifier Op�ation      </td>
                                                   
<!-- R�cuperer le resultat de la requete dans un tableau -->                                                  
  </tr>
  <p> </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">1234567890</td>
    <td width="164" bgcolor="#FFCCFF">8854176</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2016-02-12</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">300000</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=1234567890">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">999999999</td>
    <td width="164" bgcolor="#FFCCFF">8854176</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2016-02-11</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">50000</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=999999999">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">2147483647</td>
    <td width="164" bgcolor="#FFCCFF">8854176</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2016-02-07</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">14</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=2147483647">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">975940586</td>
    <td width="164" bgcolor="#FFCCFF">570557926</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2016-01-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">10</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=975940586">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">116872730</td>
    <td width="164" bgcolor="#FFCCFF">295019392</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2016-01-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">50</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=116872730">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">120496435</td>
    <td width="164" bgcolor="#FFCCFF">823422985</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2016-01-13</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">50</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=120496435">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">422481200</td>
    <td width="164" bgcolor="#FFCCFF">828108761</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2016-01-13</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">10</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=422481200">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">730131448</td>
    <td width="164" bgcolor="#FFCCFF">154949317</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2016-01-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">20</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=730131448">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">257447870</td>
    <td width="164" bgcolor="#FFCCFF">105226161</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2016-01-13</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">30</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=257447870">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">581930583</td>
    <td width="164" bgcolor="#FFCCFF">980402010</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2016-01-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">30</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=581930583">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">882200835</td>
    <td width="164" bgcolor="#FFCCFF">986554566</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2016-01-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">30</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=882200835">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">735540585</td>
    <td width="164" bgcolor="#FFCCFF">718302409</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2016-01-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">50</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=735540585">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">32517898</td>
    <td width="164" bgcolor="#FFCCFF">295019392</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2016-01-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">20</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=32517898">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">501966618</td>
    <td width="164" bgcolor="#FFCCFF">928401116</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2016-01-13</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">50</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=501966618">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">60220282</td>
    <td width="164" bgcolor="#FFCCFF">155529704</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2016-01-13</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">20</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=60220282">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">547624080</td>
    <td width="164" bgcolor="#FFCCFF">570557926</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2015-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">42</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=547624080">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">309548378</td>
    <td width="164" bgcolor="#FFCCFF">942597683</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2015-06-13</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">47</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=309548378">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">571640457</td>
    <td width="164" bgcolor="#FFCCFF">200029593</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2015-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">45</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=571640457">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">566646139</td>
    <td width="164" bgcolor="#FFCCFF">244397808</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2015-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">41</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=566646139">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">345177174</td>
    <td width="164" bgcolor="#FFCCFF">781968458</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2015-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">48</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=345177174">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">486404577</td>
    <td width="164" bgcolor="#FFCCFF">632543955</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2015-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">48</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=486404577">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">371904673</td>
    <td width="164" bgcolor="#FFCCFF">394673974</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2015-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">46</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=371904673">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">428794572</td>
    <td width="164" bgcolor="#FFCCFF">421011289</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2015-06-13</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">45</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=428794572">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">422701151</td>
    <td width="164" bgcolor="#FFCCFF">632543955</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2015-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">47</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=422701151">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">360253900</td>
    <td width="164" bgcolor="#FFCCFF">228055448</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2015-06-13</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">47</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=360253900">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">374021053</td>
    <td width="164" bgcolor="#FFCCFF">111951182</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2015-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">44</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=374021053">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">597853506</td>
    <td width="164" bgcolor="#FFCCFF">259481562</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2015-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">41</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=597853506">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">624814364</td>
    <td width="164" bgcolor="#FFCCFF">203683545</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2015-06-13</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">41</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=624814364">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">627526015</td>
    <td width="164" bgcolor="#FFCCFF">590586459</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2015-06-13</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">41</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=627526015">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">927065953</td>
    <td width="164" bgcolor="#FFCCFF">394673974</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2015-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">47</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=927065953">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">852822113</td>
    <td width="164" bgcolor="#FFCCFF">96036710</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2015-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">45</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=852822113">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">103861472</td>
    <td width="164" bgcolor="#FFCCFF">864223920</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2015-06-13</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">47</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=103861472">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">770710739</td>
    <td width="164" bgcolor="#FFCCFF">785503400</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2015-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">49</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=770710739">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">732748827</td>
    <td width="164" bgcolor="#FFCCFF">95039178</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2015-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">42</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=732748827">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">218724474</td>
    <td width="164" bgcolor="#FFCCFF">690245998</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2015-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">43</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=218724474">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">700953805</td>
    <td width="164" bgcolor="#FFCCFF">199193350</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2015-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">49</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=700953805">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">659772214</td>
    <td width="164" bgcolor="#FFCCFF">155529704</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2015-06-13</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">47</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=659772214">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">561615527</td>
    <td width="164" bgcolor="#FFCCFF">154949317</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-06-13</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">38</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=561615527">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">643541436</td>
    <td width="164" bgcolor="#FFCCFF">467659967</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">31</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=643541436">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">519957450</td>
    <td width="164" bgcolor="#FFCCFF">111951182</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-06-13</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">38</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=519957450">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">911764553</td>
    <td width="164" bgcolor="#FFCCFF">672188067</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">35</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=911764553">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">885743021</td>
    <td width="164" bgcolor="#FFCCFF">421011289</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-06-13</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">36</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=885743021">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">872441001</td>
    <td width="164" bgcolor="#FFCCFF">928401116</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-06-13</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">35</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=872441001">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">272502998</td>
    <td width="164" bgcolor="#FFCCFF">928401116</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">34</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=272502998">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">665705356</td>
    <td width="164" bgcolor="#FFCCFF">467659967</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">37</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=665705356">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">812512465</td>
    <td width="164" bgcolor="#FFCCFF">322265968</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">39</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=812512465">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">16740870</td>
    <td width="164" bgcolor="#FFCCFF">550405377</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">40</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=16740870">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">292787520</td>
    <td width="164" bgcolor="#FFCCFF">95039178</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">36</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=292787520">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">269029658</td>
    <td width="164" bgcolor="#FFCCFF">882580442</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-06-13</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">39</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=269029658">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">194789962</td>
    <td width="164" bgcolor="#FFCCFF">228055448</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-06-13</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">39</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=194789962">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">6020374</td>
    <td width="164" bgcolor="#FFCCFF">882580442</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">36</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=6020374">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">178015558</td>
    <td width="164" bgcolor="#FFCCFF">146797352</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-06-13</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">38</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=178015558">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">121374300</td>
    <td width="164" bgcolor="#FFCCFF">781968458</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-06-13</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">32</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=121374300">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">82691007</td>
    <td width="164" bgcolor="#FFCCFF">982744062</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">32</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=82691007">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">78672243</td>
    <td width="164" bgcolor="#FFCCFF">864223920</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-06-13</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">37</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=78672243">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">25381989</td>
    <td width="164" bgcolor="#FFCCFF">574031878</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">31</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=25381989">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">335115275</td>
    <td width="164" bgcolor="#FFCCFF">111951182</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">33</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=335115275">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">397333774</td>
    <td width="164" bgcolor="#FFCCFF">814010302</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-06-13</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">36</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=397333774">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">439482993</td>
    <td width="164" bgcolor="#FFCCFF">155529704</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">35</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=439482993">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">298708967</td>
    <td width="164" bgcolor="#FFCCFF">570557926</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-06-13</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">40</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=298708967">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">417481041</td>
    <td width="164" bgcolor="#FFCCFF">295019392</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-06-13</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">36</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=417481041">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">530720705</td>
    <td width="164" bgcolor="#FFCCFF">480805076</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-05-12</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">26</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=530720705">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">518080957</td>
    <td width="164" bgcolor="#FFCCFF">244397808</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-05-12</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">22</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=518080957">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">721306132</td>
    <td width="164" bgcolor="#FFCCFF">574031878</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-05-12</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">22</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=721306132">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">569202047</td>
    <td width="164" bgcolor="#FFCCFF">105226161</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-05-12</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">25</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=569202047">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">86999877</td>
    <td width="164" bgcolor="#FFCCFF">322265968</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-05-12</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">25</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=86999877">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">930078068</td>
    <td width="164" bgcolor="#FFCCFF">18727669</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-05-12</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">28</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=930078068">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">777018516</td>
    <td width="164" bgcolor="#FFCCFF">756494324</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-05-12</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">23</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=777018516">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">575662556</td>
    <td width="164" bgcolor="#FFCCFF">394673974</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-05-12</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">26</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=575662556">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">356003350</td>
    <td width="164" bgcolor="#FFCCFF">23709587</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-05-12</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">27</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=356003350">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">965776255</td>
    <td width="164" bgcolor="#FFCCFF">590586459</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-05-12</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">24</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=965776255">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">550596332</td>
    <td width="164" bgcolor="#FFCCFF">756494324</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-05-12</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">22</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=550596332">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">953783818</td>
    <td width="164" bgcolor="#FFCCFF">21800693</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-03-06</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">16</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=953783818">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">964600035</td>
    <td width="164" bgcolor="#FFCCFF">146797352</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-03-06</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">13</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=964600035">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">70845615</td>
    <td width="164" bgcolor="#FFCCFF">199193350</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-03-06</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">15</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=70845615">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">514378769</td>
    <td width="164" bgcolor="#FFCCFF">146797352</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-03-06</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">19</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=514378769">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">69585149</td>
    <td width="164" bgcolor="#FFCCFF">814010302</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-03-06</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">18</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=69585149">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">934312612</td>
    <td width="164" bgcolor="#FFCCFF">467659967</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-03-06</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">14</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=934312612">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">799284815</td>
    <td width="164" bgcolor="#FFCCFF">244397808</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-03-06</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">17</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=799284815">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">792410458</td>
    <td width="164" bgcolor="#FFCCFF">105226161</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-03-06</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">14</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=792410458">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">819973512</td>
    <td width="164" bgcolor="#FFCCFF">350545315</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-03-06</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">13</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=819973512">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">521089169</td>
    <td width="164" bgcolor="#FFCCFF">8854176</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-03-06</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">13</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=521089169">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">279329478</td>
    <td width="164" bgcolor="#FFCCFF">590586459</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-03-06</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">11</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=279329478">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">628866964</td>
    <td width="164" bgcolor="#FFCCFF">718302409</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-03-06</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">19</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=628866964">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">632421970</td>
    <td width="164" bgcolor="#FFCCFF">8854176</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-03-06</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">11</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=632421970">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">256888025</td>
    <td width="164" bgcolor="#FFCCFF">18727669</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-03-06</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">12</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=256888025">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">226413904</td>
    <td width="164" bgcolor="#FFCCFF">23709587</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-03-06</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">15</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=226413904">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">219671211</td>
    <td width="164" bgcolor="#FFCCFF">828108761</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-03-06</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">11</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=219671211">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">337560874</td>
    <td width="164" bgcolor="#FFCCFF">322265968</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-03-06</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">13</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=337560874">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">718060619</td>
    <td width="164" bgcolor="#FFCCFF">942597683</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-03-06</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">19</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=718060619">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">529554545</td>
    <td width="164" bgcolor="#FFCCFF">350545315</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-03-06</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">17</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=529554545">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">482113115</td>
    <td width="164" bgcolor="#FFCCFF">21800693</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-01-26</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">6</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=482113115">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">194267621</td>
    <td width="164" bgcolor="#FFCCFF">756494324</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-01-26</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">6</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=194267621">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">40720351</td>
    <td width="164" bgcolor="#FFCCFF">632543955</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-01-26</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">5</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=40720351">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">1234567</td>
    <td width="164" bgcolor="#FFCCFF">199193350</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-01-26</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">0</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=1234567">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">768490104</td>
    <td width="164" bgcolor="#FFCCFF">550405377</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-01-26</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">8</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=768490104">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">703778092</td>
    <td width="164" bgcolor="#FFCCFF">95039178</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-01-26</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">9</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=703778092">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">655458685</td>
    <td width="164" bgcolor="#FFCCFF">421011289</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-01-26</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">6</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=655458685">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">774339469</td>
    <td width="164" bgcolor="#FFCCFF">200029593</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-01-26</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">5</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=774339469">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">835995945</td>
    <td width="164" bgcolor="#FFCCFF">18727669</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-01-26</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">5</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=835995945">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">734993819</td>
    <td width="164" bgcolor="#FFCCFF">996066940</td>
    <td width="164" bgcolor="#CCCCFF">D</td>
    <td width="164" bgcolor="#FFCCFF">2014-01-26</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">8</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=734993819">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">860549534</td>
    <td width="164" bgcolor="#FFCCFF">785503400</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-01-26</td>
    <td width="194" bgcolor="#CCCCFF">non</td>
    <td width="164" bgcolor="#FFCCFF">8</td> 
    <td width="164" bgcolor="#CCCCFF"></td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=860549534">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">75067389</td>
    <td width="164" bgcolor="#FFCCFF">823422985</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-01-26</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">7</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=75067389">modifier</a></td>                                                                                                                                    
  </tr>
   </p>
  <tr>
    <td width="194" bgcolor="#CCCCFF">904053071</td>
    <td width="164" bgcolor="#FFCCFF">996066940</td>
    <td width="164" bgcolor="#CCCCFF">C</td>
    <td width="164" bgcolor="#FFCCFF">2014-01-26</td>
    <td width="194" bgcolor="#CCCCFF">oui</td>
    <td width="164" bgcolor="#FFCCFF">7</td> 
    <td width="164" bgcolor="#CCCCFF">2016-02-08</td>     
    <td width="164" bgcolor="#FFCCFF"><a href="ModifierOperation.php?Num_Ope=904053071">modifier</a></td>                                                                                                                                    
  </tr>
   
</table>
</body>
</html>