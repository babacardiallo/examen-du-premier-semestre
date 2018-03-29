<?php
try{
   $server="localhost";
  $login="root";
  $passwd="";
  $dbname ="gale";



    $con = new PDO('mysql:host='.$server.';dbname='.$dbname.';charset=utf8',$login,$passwd);


   $requete=$con->prepare("INSERT INTO nekk(NOM, PRENOM, ADRESSE)

						  VALUES(:nom,:prenom,:adresse)");


	function securisation($info){
                $info = trim($info);
                $info = stripslashes($info);
                $info = strip_tags($info);
                return $info;
          }


          $nom = $_POST['nom'];
          $prenom = $_POST['prenom'];
          $adresse = $_POST['adresse'];
         

		  $requete->bindParam(':nom',$nom);
          $requete->bindParam(':prenom',$prenom);
          $requete->bindParam(':adresse',$adresse);
          $resultat = $requete->execute();


  if($resultat){
     header('Location: affichageBD.php');
  }else{
     header('Location: erreur.php');
  }


  }catch(PDOException $e){
  echo 'Erreur!!! '.$e->getMessage();
  echo 'Echec de la connexion avec la base de donnée';
}
?>



