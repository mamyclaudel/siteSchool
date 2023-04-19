
var versements = document.querySelector('.modepaiement');
var raison1 = document.querySelector('.droit1');
var raison2 = document.querySelector('.droit2');
var raison3 = document.querySelector('.droit3');
var raison4 = document.querySelector('.droit4');
var autreraisons = document.querySelector('#autres');
var erreur = document.querySelector('#erreur');

versements.addEventListener("click", function(e){


if(raison1.checked==true || raison2.checked==true || raison3.checked==true || raison4.checked==true || autreraisons.value?.trim() !== ''){
    var piecejustificatives = document.getElementById('piecejustificatives');
    var motifs = "";

    if(raison1.checked==true){
        motifs = "droit d'inscription";
    }
    else if(raison2.checked==true){
        motifs = "ecolage";
    }
    else if(raison3.checked==true){
        motifs= "droit d'examen";
    }
    else if(raison4.checked==true){
        motifs = "certificat de scolarite";
    }
    else if(autreraisons.value?.trim() !== ''){
        motifs = autreraisons.value;
    }

    contenupieces = `
    <div class="col-sm-6"></div>
    <div class="col-sm-12 col-md-5" style="margin-top:-190px;">
        <form action="../index.php?action=paye" method="POST" style="padding-top:-100px;">
            <input type="date" class="form-control mb-2" name="datepaiement"> 
            <input type="number" class="form-control mb-2" name="nbrmois" placeholder="Number of months (nombre de mois)"> 
            <input type="number" class="form-control mb-2" name="niveau" placeholder="Level (niveau)"> 
            <input type="number" class="form-control mb-2" name="ref" placeholder="reference or slip (reference ou bordereau): 12345678" required> 
            <input type="hidden"   name="droit" value="${motifs}"> 

        <div class="row">
            <div class="col-6 col-sm-6 col-md-6"></div>
            <div class="col-3 col-md-3">
                <input type="submit" class="btn btn-warning btn-block text-center mb-4" style="font-weight:bold;" name="btnvalider" value="Validate">        
            </div>
            <div class="col-3 col-md-3">
                <a href="../views/paiement.php" class="btn btn-danger btn-block text-center mb-4" style="font-weight:bold;" >Cancel</a>
            </div>
        </div>
        </form>
    `;
    

    piecejustificatives.innerHTML=contenupieces;
    erreur.setAttribute("style", "display:none;");
}
else{

    var contenuerreur = `<p class="text-center mt-2" style="color: red; font-style:italic; font-weight:bold; font-family:time new roman;">Please tick your reason for payment!<br/> (Veillez cocher  votre raison de paiement!)</p>`;
    
    erreur.innerHTML = contenuerreur;
    // alert('Veillez cocher  votre raison de paiement');
}


});
