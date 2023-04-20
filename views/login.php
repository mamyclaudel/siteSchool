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
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h2 class="text-center text-muted mt-5" style="font-size:30px;">Connexion</h2>
            <form action="<?php echo URL;?>index.php?action=seconnecter" class="form form-group border p-4" style="border-radius:3%;" method="POST">
                <input type="text" class="form-control mt-4 mb-2" name="pseudomail" id="pseudomail" placeholder ="mail ou pseudo">
                <input type="password" class="form-control mb-2" name="password" id="password" placeholder="password">
                <img id="showmdp" style="width:20px; position:absolute; right:18px; top: 200px; cursor:pointer; ::before{content:'\f070';}" src="<?php echo URL;?>publics/photos/eye.png"/>
                <input type="submit" class = "btn btn-outline-primary btn-block" name="btnconnect" value="Connect">
                <input type="submit" class = "btn btn-outline-warning btn-block" name="btncreate" value="Create a new count">
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<script src="../publics/js/jquery.js"></script>
<script src="../publics/bs4/js/bootstrap.js"></script>
<script src="../publics/js/app.js"></script>
</body>
</html>
