
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

<div class="container-fluid " >
    <div class="row" id="inscription">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <h2 class="text-center text-muted mt-4">Registration</h2>
            <form action="<?php echo URL; ?>index.php?action=registration" method="POST" class="form-group " enctype="multipart/form-data">
                <input type="text" class="form-control mb-2 mt-4" name="nom" id="nom" placeholder="Your name" required>
                <input type="text" class="form-control mb-2" name="prenom" id="prenom" placeholder="Your first name" required>
                <input type="text" class="form-control mb-2" name="mail" id="mail" placeholder="Pseudo or mail" required>
                <input type="password" class="form-control mb-2" name="password" id="password" placeholder="Password" required>
                <label class="form-check-label" style="font-style: italic; font-family:time new roman; cursor: pointer;">
                    <input type="checkbox"  name="showpwd" id="showpwd" value ="show" > Show password
                </label></br>
                <label for="photo" class="text-muted" style="font-weight:bold;">Recent photo : </label> 
                <input type="file" class="form-control mb-2" name="photo" id="photo" required>
                <label for="date" class="text-muted" style="font-weight:bold;">Registration date : </label> 
                <div class="row mb-2">
                    <div class="col-4 col-sm-4">
                    <select  name="day" class=" text-center form-control form-outline-primary form-block">
                        <option>Day</option>
                        <option>01</option>    
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                        <option>06</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                    </select>
                    </div>
                    <div class="col-4 col-sm-4">
                    <select  name="month" class=" text-center form-control  form-outline-primary form-block" >
                        <option>Month</option>
                        <option>01</option>    
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                        <option>06</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                    </div>
                    <div class="col-4 col-sm-4">
                    <select  name="year" class=" text-center form-control form-outline-primary form-block">
                        <option>Year</option>
                        <option>2023</option>
                        <option>2024</option>
                        <option>2025</option>
                        <option>2026</option>
                        <option>2027</option>
                        <option>2028</option>
                    </select>
                    </div>
                </div>
                <input type="submit" class="btn btn-warning btn-block" style="font-weight:bold;" name="btnregister" value="Register">
                <a href="<?php echo URL; ?>views/inscription.php" class="btn btn-outline-danger btn-block mt-2" style="margin-bottom:50px;">Cancel</a>
            </form>
        </div>
        <div class="col-sm-4 mt-4 border" style="width:100%; height:480px; background-image:url('<?php echo URL; ?>publics/photos/étudiante.png'); background-size:cover; backgroung-position:center; background-repeat:no-repeat; border-radius:3%"></div>
        <div class="col-sm-2"></div>
    </div>
</div>
<script src="<?php echo URL; ?>publics/js/jquery.js"></script>
<script src="<?php echo URL; ?>puplics/bs4/js/bootstrap.js"></script>
<script src="../publics/js/paiement.js?<?php echo rand(1, 1000); ?>"></script>
</body>
</html>