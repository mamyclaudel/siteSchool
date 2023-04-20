
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../publics/bs4/css/bootstrap.css" />
    <link rel="stylesheet" href="../publics/css/style.css" />
    <title>Plateform</title>
</head>
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
        <div class="col-sm-1 mt-4" id="logo" style="height:100px; background-image:url('../publics/photos/logo.png'); background-size:cover; backgroung-position:center; background-repeat:no-repeat; border-radius:3%">
        </div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row">
    <div class="col-sm-1"></div>
        <div class="col-5 col-sm-3 form-group shadow border p-4 mt-2">
            <button id ="home" class="btn btn-outline-primary btn-block mb-2">Home</button>
            <button id ="profile" class="btn btn-outline-primary btn-block mb-2">Profile</button>
            <form action="../index.php?action=requete"  method="POST" >
                <select class="form-control text-center form-outline-primary form-block mb-2 mt-2" id="sel1">
                    <option>Cours</option>    
                    <option>Module 1</option>
                    <option>Module 2</option>
                    <option>Module 3</option>
                    <option>Module 4</option>
                </select>
                <select class="form-control text-center form-outline-primary form-block mb-2 mt-2" id="sel1">
                    <option>Exercice</option>
                    <option>Module 1</option>
                    <option>Module 2</option>
                    <option>Module 3</option>
                    <option>Module 4</option>
                </select>
                <select class="form-control text-center form-outline-primary form-block mb-2 mt-2" id="sel1">
                    <option>Correction</option>
                    <option>Module 1</option>
                    <option>Module 2</option>
                    <option>Module 3</option>
                    <option>Module 4</option>
                </select>
                <a href="<../views/paiement.php" class="btn btn-outline-primary btn-block">Payment</a>
            </form>
            <button id ="contact" class="btn btn-outline-primary btn-block mt-2 mb-2">Contact</button>
            <button id ="contact" class="btn btn-outline-primary btn-block mt-2 mb-2">Remark</button>
        </div>
        <div class="col-7 col-sm-7">
            <div   class="form-group shadow border p-4 mt-2" style="height:400px; overflow-y:scroll; scrollbar-width: thin ;">
                <div id="contenu" class="content">

                <!-- explicationvideo.addEventListener("click", function(){
    var video = ` -->
    <video  width="400px" height="200px" controls autoplay muted loop>
        <source src ="../publics/photos/video.mkv" />
    </video>
    <!-- `;

    contenuselt.innerHTML = video ;
}); -->
                </div>
                <!-- <a href="<../views/paiement.php" class="btn btn-outline-primary btn-block">Payment</a>
                <a href="<../views/paiement.php" class="btn btn-outline-primary btn-block">Payment</a>
                <a href="<../views/paiement.php" class="btn btn-outline-primary btn-block">Payment</a>
                <a href="<../views/paiement.php" class="btn btn-outline-primary btn-block">Payment</a> -->

                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>


<script src="<?= URL; ?>publics/js/jquery.js"></script>
<script src="<?= URL; ?>publics/bs4/js/bootstrap.js"></script>
<script src="<?= URL; ?>publics/js/accueil.js"></script>
</body>
</html>