<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Paiement</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../publics/bs4/css/bootstrap.css">
        <link rel="stylesheet" href="../publics/css/style.css">
    </head>

    <style>
        .spanbtn{
            display:inline-block; 
            color: white;
            transition:
            transform 0.15s ease-out, 
            color 0.15s ease-out, 
            background-color 0.15s ease-out;                                               
        }
        .btnpaiement{ 
            display:inline-block;
        }
        .btnpaiement:hover{
            transform: translate(-20px, -6px);
            color:black;
            background: #ff90e8;
        }
    </style>
    <body>
    <?php var_dump($_SESSION); ?>

<div class="container border shadow ">
    <div class="row" style=" z-index:1000;">
            <div class="col-sm-1 col-md-1">
            <button onclick='history.back()' class="btn btn-outline-primary mt-2">←</button>
            </div>
            <div class="col-sm-11 col-md-11"> 
                <h3 class="text-center mt-4 mb-4">"<span>P</span>our un <span>A</span>venir <span>M</span>eilleur"</h3>
            </div>
    </div>
</div>

<div class="container shadow border mt-4" style="z-index:1;">
    <div class="row" >
        <div class="col-md-1"></div>
        <div class="col-sm-12 col-md-5">
        <h2 class="text-center text-muted mt-4 pb-4" style="font-weight:bold; font-family:time new roman; border-bottom-style:ridge;">Reasons for payment : </h2>
            <form class="form-groupe form" id="paiement" action="" method="POST">
                <label class="form-check-label form-control mb-2 mt-4">
                    <input type="checkbox" class="form-check-input droit1"  name="droit" value="inscription"> Registration fees (droit d'inscription) 150 000 Ariary
                </label>
                <label class="form-check-label form-control mb-2">
                    <input type="checkbox" class="form-check-input droit2"  name="droit" value="ecolage"> Monthly tuition (écolage mensuelle) 90 000 Ariary
                </label>
                <label class="form-check-label form-control mb-2">
                    <input type="checkbox" class="form-check-input droit3"  name="droit" value="examen"> Examination fee (droit d'éxamen) 30 000 Ariary
                </label>
                <label class="form-check-label form-control mb-2">
                    <input type="checkbox" class="form-check-input droit4"  name="droit" value="certificat"> School certificate (cértificat de scolarité) 15 000 Ariary
                </label>
                <input type="text" id ="autres" class="form-control" name="droit" placeholder="Others..."> 
            </form> 
            <div class="col-sm-12" id="erreur"></div>
            
        </div>

        <div class="col-sm-12 col-md-5">
            <h2 class="text-center text-muted mt-4 pb-4" style="font-weight:bold; font-family:time new roman; border-bottom-style:ridge;">Payment method : </h2>
                <div class="modepaiement shadow border mt-4" style="margin-bottom:200px;">
                    <button class="btnpaiement btn btn-block" style="font-weight:bold; background-color:green; " name="versement"><span class="spanbtn">Mvola</span></button>
                    <button class="btnpaiement btn  btn-block " style="font-weight:bold; background-color:orange; color: white;" name="versement"><span class="spanbtn">OrangeMoney</span></button>
                    <button  class="btnpaiement btn btn-danger btn-block " style="font-weight:bold; color: white;" name="versement"><span class="spanbtn">AirtelMoney</span></button>
                    <button  class="btnpaiement btn btn-dark btn-block" style="font-weight:bold; color: white;"  name="versement"><span class="spanbtn">Westerne Union</span></button>
                    <button  class="btnpaiement btn btn-primary btn-block versement" style="font-weight:bold; color: white;"  name="versement"><span class="spanbtn">Cheque Bancaire</span></button>
                    <button  class="btnpaiement btn btn-primary btn-block mb-4 versement" style="font-weight:bold; color: white;"  name="versement"><span class="spanbtn">Virement Bancaire</span></button>
                </div>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row" id="piecejustificatives"></div>
</div>
    <script src="<?php echo URL; ?>publics/js/jquery.js"></script>
        <script src="<?php echo URL; ?>puplics/bs4/js/bootstrap.js"></script>
        <script src="../publics/js/paiement.js?<?php echo rand(1, 1000); ?>"></script>
    </body>
    <footer>
    <div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <p class="text-center mt-4" style="font-style:italic;">Phone number : + 261340011122 / + 261320011122 / + 261330011122 in the name of "nos ecole"</p>
            <p class="text-center" style="font-style:italic;">Bank number : 00001 - 00020 - 1234567809 - 01 </p>
        </div>
        <div class="col-sm-2"></div>
    </div>
    </div>
    </footer>
</html>
