<?php
if(isset($_GET['id']) && isset($_GET['token'])){
    $id = $_GET["id"];
    $token = $_GET["token"];    
    $connection = mysqli_connect("localhost","Olympiendu76","0235045849","phpdieppe");
    if(!$connection){
        die("Erreur de connexion !!!" . mysql_connect_errno() . " | " . mysql_connect_error());
    }
    else{
        $requete = "Select * from t_users where iduser = $id and use_token = '$token'";
        $resultat = mysqli_query($connection,$requete); 
       if(mysqli_num_rows($resultat) > 0){           
            $requeteModif = "UPDATE t_users SET use_verif = 1 WHERE iduser = $id and use_token = '$token'";
            mysqli_query($connection,$requeteModif);
        }
        else{
            echo "erreur";
        }
    }
}
else{

}
?>