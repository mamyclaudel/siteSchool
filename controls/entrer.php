<?php
include 'controls/connexion.php';
session_start();

$erreur = "";
$_SESSION["erreur"] = $erreur;

if(isset($_POST["btncreate"])){
    header("Location: views/inscription.php?action=nouveau");
}

else if(isset($_POST["btnconnect"])){
    if(isset($_POST["pseudomail"]) && isset($_POST["password"])){
        if($_POST["pseudomail"]!=="" && $_POST["password"]!==""){
            $pseudomail = htmlspecialchars($_POST["pseudomail"]);
            $password = htmlspecialchars($_POST["password"]);

            $check = $con->prepare("SELECT `email`, `id`, `password`, `nom`, `photo` FROM `student` WHERE `email`=? AND `password`=?");
            $result = $check->execute([$pseudomail, $password]);
            $data = $check->fetch();
            $row = $check->rowCount(); 

            if($row > 0){
                if($data["email"]===$_POST["pseudomail"] && $data["password"]===$_POST["password"]){
                    $_SESSION["noms"] = $data["nom"];
                    $_SESSION["pdpx"] = $data["photo"]; 
                    $_SESSION["ids"] = $data["id"];
                    
                    echo  $_SESSION["pdp"] ;
                    header("Location: views/accueil.php?action=membre");
                }
            }else if($row <= 0){
                $erreur = "Please verify your information!";
                $_SESSION["erreur"] = $erreur;
                header("Location: index.html?action=nonmembre");
            }
        }

    }
}




?>