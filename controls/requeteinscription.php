
<?php 


include "models/database.php";
session_start();
$pdp = $_FILES["photo"];

if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["mail"]) && isset($_POST["password"]) && isset($_POST["day"]) && isset($_POST["month"]) && isset($_POST["year"])){

    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $mail = htmlspecialchars($_POST["mail"]);
    $pwd = htmlspecialchars($_POST["password"]);
    $day = htmlspecialchars($_POST["day"]);
    $month = htmlspecialchars($_POST["month"]);
    $year = htmlspecialchars($_POST["year"]);
    
    $date = $year."-".$month."-".$day;

    // echo $date;

    // var_dump($_FILES);
    if(isset($_FILES["photo"])  and $_FILES["photo"]["error"]== 0){
        //echo "error";

        // $pdp = $_FILES["photo"];

        // echo $pdp;

        if($_FILES["photo"]["size"]<= 10000000){
            $info = pathinfo($_FILES["photo"]["name"]);

            $extension = $info["extension"];
            $extensionphoto = array("jpg", "jpeg", "png", "gif");
            if(in_array($extension, $extensionphoto)){
                move_uploaded_file($_FILES["photo"]["tmp_name"],  "publics/photos/" . $nom . "." . $extension);
            //echo "ok";
            $image = $nom.".".$extension;

                
            }
        }
    }

//     $db=new Database();
//     $insert=$db->insertData("student", "(`nom`, `prenom`, `email`, `password`, `photo`, `date`)", "($nom, $prenom, $mail, $pwd, $pdp, $date)", connect());
//     header ("Location: index.php?action=inscrit");

}
try{

    $con= new PDO("mysql:host=localhost; dbname=school", "root", "");    
    
}catch(PDOException $e){
    echo $e;
    die();
}

function insert($nom, $prenom, $mail, $pwd, $pdp, $date){
    global $con, $image;
    $con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
    $insert= $con->prepare("INSERT INTO `student`( `id`, `nom`, `prenom`, `email`, `password`, `photo`, `date`) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $res = $insert->execute([$nom, $prenom, $mail, $pwd, $image, $date]);
    $data = $insert->fetch();

    $_SESSION["noms"] = $nom;
    $_SESSION["pdpx"] = $image; 
    $_SESSION["ids"] = $data['id'];
    // var_dump( $res);
    // echo "\nPDO::errorInfo():\n";
    // print_r($con->errorInfo());
    // //echo "tafiditra";
}
insert($nom, $prenom, $mail, $pwd, $pdp, $date);
header("Location: index.php?action=inscrit");
?>