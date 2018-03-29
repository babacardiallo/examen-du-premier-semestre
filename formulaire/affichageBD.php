<!DOCTYPE html>
<html>
<head>
	<title>Liste des contacts enregistrer</title>
	<META charset="utf-8"/>
</head>
<body>
   <?php
   try{

   	$server="localhost";
  $login="root";
  $passwd="";
  $dbname ="nekk";



$con = new PDO('mysql:host='.$server.';dbname='.$dbname.';charset=utf8',$login,$passwd);
   	$requete = $con->query("SELECT * from nekk");
   	?>
   	<table>
   	<tr>
   		<td colspan="6" id="entete"><strong>Listes des contacts</strong></td>
   	</tr>
   	<p><tr>
   	    <th>ID</th>
   		<th>NOM</th>
   		<th>PRENOM</th>
   		<th>ADRESSE</th>
   		
   	</tr>
   	</p>


   		<?php

             while($resultat = $requete->fetch()){
        ?>
                <tr>
              <p> <td><?php echo $resultat['ID']; ?></td>
                  <td><?php echo $resultat['NOM']; ?></td>
                  <td><?php echo $resultat['PRENOM']; ?></td>
                  <td><?php echo $resultat['ADRESSE']; ?></td>
                  
                 </p>
                </tr>

        <?php
             }
         ?>

    </table>
   	<?php
   }catch(PDOException $e){
   	     die('Erreur!!!'.$e->getMessage());
   }
   ?>

</body>
</html>
