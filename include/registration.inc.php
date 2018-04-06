<h1>Inscription</h1>

<?php  
if(isset($_POST['frmRegistration'])){    
    
    if(isset($_POST["nom"])){
        $nom = $_POST["nom"];
    }
    else{
        $nom = "";
    }

    //$nom = isset($_POST["nom"]) ? $_POST["nom"] : "";
    //$nom = $_POST['nom'] ?? "";

    $prenom = $_POST['prenom'] ?? "";
    $mail = $_POST['mail'] ?? "";
    $mdp = $_POST['mdp'] ?? "";

    $erreur = array();

    if($nom === ""){
        array_push($erreur, "Veuillez saisir votre nom");
    }
    if($prenom === ""){
        array_push($erreur, "Veuillez saisir votre prénom");
    }
    if($mail === ""){
        array_push($erreur, "Veuillez saisir votre adresse mail");
    }
    if($mdp === ""){
        array_push($erreur, "Veuillez saisir votre mot de passe");
    }

    if (count($erreur)>0) {
        $message = "<ul>";

        $i = 0;

        while($i < count($erreur)){
            $message .= "<li>";
            $message .= $erreur[$i];
            $message .= "</li>";
            $i++;
        }

        $message .= "</ul>";

        echo $message;
        include "frmRegistration.php";
    }
    else {
        $mdp = sha1($mdp);
        $connection = mysqli_connect("localhost","Olympiendu76","0235045849","phpdieppe");
        $requete = "INSERT INTO t_users
        (use_name, use_firstname, use_mail, use_password, idRole)
        VALUES ('$nom','$prenom', '$mail', '$mdp', 3)";
        /*die($requete);*/
        if (!$connection) {
            die("Erreur de connexion !!!" . mysql_connect_errno() . " | " . mysql_connect_error());
        }
        else{
            if (mysqli_query($connection,$requete)) {
                echo "Ajouter";
            }
            else{
                echo "Erreur";
                include "frmRegistration.php";
            }
            mysqli_close($connection);
        }
    }
}
else{
    echo "Je viens pas du formulaire";
    include "frmRegistration.php";
};
?>
