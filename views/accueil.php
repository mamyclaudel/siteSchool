
<?php session_start(); 
$mamy = $_SESSION["noms"];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL; ?>publics/bs4/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= URL; ?>publics/css/style.css" />
    <title>Plateform</title>
    <!-- <meta name="baseUrl" content="<?= URL; ?>"> -->
</head>
<style>
    .btnfermervideo:hover{
    background-color: red;
    color:white;
    font-weight: bold;
}
</style>
<body>
<div class="container border shadow ">
    <div class="row" style=" z-index:1000; display:absolute;">
            <div class="col-sm-1 col-md-1">
            <button onclick='history.back()' class="btn btn-outline-primary mt-2">←</button>
            </div>
            <div class="col-sm-11 col-md-11"> 
                <h3 class="text-center mt-4 mb-4">"<span>P</span>our un <span>A</span>venir <span>M</span>eilleur"</h3>
            </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-3">
            <img class="shadow mt-4" style="border:5px solid white;border-radius:50%; height: 120px; width: 100px;" src="<?php URL ; ?>publics/photos/<?php echo $_SESSION["pdpx"]; ?>" alt="Photo">
            <h6 class="mt-2" style="font-style:italic; font-family:timenew roman; font-weight:bold;"><?php echo $_SESSION["noms"]; ?></h6>
        </div>
        <div class="col-sm-6">
            <h2 class="text-center text-muted mt-4">Welcome dear Student </h2>
            <p class="text-center" style="font-size: 20px; font-style:italic;">"The study is a good legacy"</p>
        </div>
        <div class="col-sm-1 mt-4" id="logo" style="height:100px;  background-image:url('<?= URL; ?>publics/photos/logo.png'); background-size:cover; backgroung-position:center; background-repeat:no-repeat; border-radius:3%">
        </div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row" id="row1accueil">
    <div class="col-sm-1"></div>
        <div class="col-5 col-sm-3 form-group shadow border p-4 mt-2">
            <button id ="home" class="btn btn-outline-primary btn-block mb-2">Home</button>
            <button id ="profile" class="btn btn-outline-primary btn-block mb-2">Profile</button>
            <form action="../index.php?action=requete"  method="POST" >
                <select class="form-control text-center form-outline-primary form-block mb-2 mt-2" id="sel1">
                    <option>Cours</option>    
                    <option value="coursmodule1">Module 1</option>
                    <option  value="coursmodule2">Module 2</option>
                    <option  value="coursmodule3">Module 3</option>
                    <option  value="coursmodule4">Module 4</option>
                </select>
                <select class="form-control text-center form-outline-primary form-block mb-2 mt-2" id="sel2">
                    <option>Exercice</option>
                    <option value="exomodule1">Module 1</option>
                    <option value="exomodule2">Module 2</option>
                    <option value="exomodule3">Module 3</option>
                    <option value="exomodule4">Module 4</option>
                </select>
                <select class="form-control text-center form-outline-primary form-block mb-2 mt-2" id="sel3">
                    <option>Correction</option>
                    <option value="correctionmodule1">Module 1</option>
                    <option value="correctionmodule2">Module 2</option>
                    <option value="correctionmodule3">Module 3</option>
                    <option value="correctionmodule4">Module 4</option>
                </select>
                <a href="<?= URL; ?>views/paiement.php" class="btn btn-outline-primary btn-block">Payment</a>
            </form>
            <button id ="contact" class="btn btn-outline-primary btn-block mt-2 mb-2">Contact</button>
        </div>
        <div class="col-7 col-sm-7">
            <div   class="form-group shadow border p-4 mt-2" style="height:400px; overflow-y:auto; scrollbar-width: thin ; background-image:url('<?= URL; ?>publics/photos/livre.jpg'); background-size:cover; ">
                <div id="contenu" class="content" ></div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>


<script src="<?= URL; ?>publics/js/jquery.js"></script>
<script src="<?= URL; ?>publics/bs4/js/bootstrap.js"></script>
<script src="<?= URL; ?>publics/js/accueil.js?<?= rand(1, 1000); ?>"></script>
<script>var baseUrl = "<?= URL; ?>"</script>
</body>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-7">
                <p class="text-center mt-4" style="font-style:italic;">headquarter (siége sociale) : <span>Ambatobe</span></p>
                <p class="text-center" style="font-style:italic;">Lot : 101- Antananarivo-Villa nambinina-27</p>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
</footer>
</html>