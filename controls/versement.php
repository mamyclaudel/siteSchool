<?php 

session_start();

try{

    $con= new PDO("mysql:host=localhost; dbname=school", "root", "");    
    $con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

}catch(PDOException $e){
    echo $e;
    die();
}

$nom = $_SESSION["noms"];
$id = $_SESSION["ids"];
$content = $_POST;

var_dump($_SESSION);
echo "Start";
if(isset($content["btnvalider"])){
    echo "Start 2";

   // if(!empty($content["droit"])){
    //    echo "Start 3";

        // foreach($content["droit"] as $value){
        //     $motif = $value;
        // }
    //}
  //  else if(isset($content["datepaiement"]) && isset($content["nbrmois"]) && isset($content["niveau"]) && isset($content["ref"])){
        echo "Start 4";

        $date = $content["datepaiement"];
        $nbr = $content["nbrmois"];
        $niveau = $content["niveau"];
        $reference = $content["ref"];
        $motif= $content["droit"];

       // function insert($date, $motif, $nbr, $nom, $niveau, $reference){
            $insert = $con->prepare("INSERT INTO `finance`(`datepaiement`, `iduser`, `motif`, `quantite`, `nom`, `niveau`, `reference`) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $result = $insert->execute([$date, $id, $motif, $nbr, $nom, $niveau, $reference]);

            var_dump($result);
            header("Location: index.php?action=paiement_recus");
            
       // }
       // insert($date, $motif, $nbr, $nom, $niveau, $reference);
      //  header("Location: index.php?action=recus");
   // }
}

// if(isset($content["btnvalider"])){
//     if(isset($content["droit"]) || isset($content["autredroit"])){
//         if($content["droit"].checked === true || $content["autredroit"] !==""){
//             $motif= $content["droit"].checked.value;
//             $motif=$content["autredroit"].value;
//         }
//     }
//     if(isset($content["datepaiement"])  && isset($content["niveau"]) && isset($content["ref"]) || isset($content["nbrmois"])){
        
//         $datepaiement = htmlspecialchars($content["datepaiement"]);
//         $niveau = htmlspecialchars($content["niveau"]);
//         $reference = htmlspecialchars($content["ref"]);
//         $qte = htmlspecialchars($content["nbrmois"]);


//         function insert($datepaiement, $niveau, $reference, $qte){
//             $insert =$con->prepare("INSERT INTO `finance`(`datepaiement`, `id`, `motif`, `quantité`, `nom`, `niveau`, `reference`) VALUES (?, ?, ?, ?, ?, ?, ?");
//             $result = $insert->execute([$datepaiement, $niveau, $reference, $qte]);
            
//         }
//     }
// }


?>