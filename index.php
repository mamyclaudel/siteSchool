<?php
const URL= "http://127.0.0.1:80/Revision/";

include("views/template/header.php");

if(isset($_GET["action"])){
    if($_GET["action"]=="seconnecter"){
        include("controls/entrer.php");
    }
    else if($_GET["action"]=="membre"){
        include("views/accueil.php");
    }
    else if($_GET["action"]=="nonmembre"){
        include("views/login.php");
    }
    else if($_GET["action"]=="nouveau"){
        include("views/inscription.php");
    }
    else if($_GET["action"]=="registration"){
        include("controls/requeteinscription.php");
    }
    else if($_GET["action"]=="inscrit"){
        include("views/accueil.php");
    }
    else if($_GET["action"]=="paye"){
        include("controls/versement.php");
    }
    else if($_GET["action"]=="paiement_recus"){
        header("Location: http://127.0.0.1:80/Revision/views/paiement.php");
    }


}else{
    include("views/login.php");
}




include("views/template/footer.php");
?>