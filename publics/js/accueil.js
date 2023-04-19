

//---------------------- Home-----------------------------

var homes= document.getElementById('home');
var isvisible=false;
console.log(isvisible);

homes.addEventListener("click", function(e) {
    var contenthomes = document.getElementById('contenu');

    isvisible=!isvisible;
    console.log(isvisible);

    isvisible ? contenthomes.setAttribute("style", "display:block;") : contenthomes.setAttribute("style", "display:none;");


    // var titrehomes = document.createElement('h2');


    // titrehomes.setAttribute("class", "text-center text-primary pb-4" );
    // titrehomes.setAttribute("style", "border-bottom-style:ridge; margin-bottom:4px; font-style:italic");
    // titrehomes.innerHTML="LE CENTRE DE FORMATION \"SCHOOL\":";


    var contenu = `<h2 class="text-center text-primary pb-4" style="border-bottom-style:ridge; margin-bottom:4px; font-style:italic">LE CENTRE DE FORMATION "SCHOOL":</h2>`
    

    // var txthomes = document.createElement('p'); 
    // txthomes.setAttribute("style", "font-family:time new roman");
    // txthomes.innerHTML="Nous sommes parmis les meilleurs centres d\'information à Madagascar agrée par l\'Etat, nous vous formons avec d\'accompagnement et stage sur les filières suivantes:";

    contenu+=`<p style="font-family:time new roman">Nous sommes parmis les meilleurs centres d'information à Madagascar agrée par l'Etat, nous vous formons avec d'accompagnement et stage sur les filières suivantes:</p>
    <ul style="font-family:time new roman; list-style-type: circle"><li>Developpement Web</li><li>Informatique bureautique</li><li>Excel avancée</li><li>Webmarketing</li></ul>
    <p style="font-family:time new roman">Nous vous offrons deux types d'information :</p>
    <ul style="font-family:time new roman; list-style-type: circle"><li>La formation 100% enligne</li><li>La formation presentielle</li></ul>
    `
    // var ulhomes = document.createElement('ul');
    // var li1homes = document.createElement('li');
    // var li2homes = document.createElement('li');
    // var li3homes = document.createElement('li');
    // var li4homes = document.createElement('li');
    // ulhomes.setAttribute("class", "font-family:time new roman; list-style-type: circle");
    // li1homes.innerHTML="Developpement Web";
    // li2homes.innerHTML="Informatique bureautique";
    // li3homes.innerHTML="Excel avancée";
    // li4homes.innerHTML="Webmarketing";
    // ulhomes.appendChild(li1homes);
    // ulhomes.appendChild(li2homes);
    // ulhomes.appendChild(li3homes);
    // ulhomes.appendChild(li4homes);

    // var txt1homes = document.createElement('p');
    // txt1homes.setAttribute("style", "font-family:time new roman");
    // txt1homes.innerHTML="Nous vous offrons deux types d'information :";
    


    // var ul1homes = document.createElement('ul');
    // var li11homes = document.createElement('li');
    // var li12homes = document.createElement('li');
    // ul1homes.setAttribute("style", "font-family:time new roman; list-style-type: circle");
    // li11homes.innerHTML="La formation presentielle";
    // li12homes.innerHTML="La formation 100% enligne";
    // ul1homes.appendChild(li11homes);
    // ul1homes.appendChild(li12homes);


    contenthomes.innerHTML = contenu;

  //  contenthomes.appendChild(titrehomes);
  //  contenthomes.appendChild(txthomes);
  //  contenthomes.appendChild(ulhomes);
  //  contenthomes.appendChild(txt1homes);
  //  contenthomes.appendChild(ul1homes);


    //("#contenu").slideToggle(1000);
});



// -------------------Profile-----------------------

var profiles = document.getElementById('profile');

profiles.addEventListener("click", function(){

    var contentprofiles = document.getElementById('contenu');

    isvisible=!isvisible;
    console.log(isvisible);

    isvisible ? contentprofiles.setAttribute("style", "display:block;") : contentprofiles.setAttribute("style", "display:none;");

    var contenuprofiles =`<h2 class="text-center text-primary pb-4" style="border-bottom-style:ridge; margin-bottom:4px; font-style:italic">VOTRE PROFILE Mr/Mlle :</h2>`

    // var titreprofiles = document.createElement('h2');
    // titreprofiles.setAttribute("class", "text-center text-primary pb-4" );
    // titreprofiles.setAttribute("style", "border-bottom-style:ridge; margin-bottom:4px; font-style:italic");
    // titreprofiles.innerHTML="VOTRE PROFILE Mr/Mlle Claudel :";
    // contentprofiles.appendChild(titreprofiles);

    contentprofiles.innerHTML=contenuprofiles;

    var txt1profiles = document.createElement('p');
    txt1profiles.setAttribute("style", "font-family:time new roman");
    txt1profiles.innerHTML="Nom : RAFANOMEZANTSOA";
    contentprofiles.appendChild(txt1profiles);

    var txt2profiles = document.createElement('p');
    txt2profiles.setAttribute("style", "font-family:time new roman");
    txt2profiles.innerHTML="Prénom : Tantelimamikavana Claudel";
    contentprofiles.appendChild(txt2profiles);

    var txt3profiles = document.createElement('p');
    txt3profiles.setAttribute("style", "font-family:time new roman");
    txt3profiles.innerHTML="Adresse mail : claudel.ceres.p4@gmail.com";
    contentprofiles.appendChild(txt3profiles);

    var txt4profiles = document.createElement('p');
    txt4profiles.setAttribute("style", "font-family:time new roman");
    txt4profiles.innerHTML="Date d'inscription : 12/01/2023";
    contentprofiles.appendChild(txt4profiles);

    var txt5profiles = document.createElement('p');
    txt5profiles.setAttribute("style", "font-family:time new roman");
    txt5profiles.innerHTML="Niveau : 3";
    contentprofiles.appendChild(txt5profiles);

    // var txt6profiles = document.createElement('p');
    // txt6profiles.setAttribute("style", "font-family:time new roman");
    // txt6profiles.innerHTML="Formation : Developement web";
    // contentprofiles.appendChild(txt6sprofiles);

});


//-----------------------Contact-----------------------------


var contacts= document.getElementById('contact');

contacts.addEventListener("click", function() {

    var contentcontacts = document.getElementById('contenu');

    isvisible=!isvisible;
    console.log(isvisible);

    isvisible ? contentcontacts.setAttribute("style", "display:block;") : contentcontacts.setAttribute("style", "display:none;");

    var contenucontacts =`<h2 class="text-center text-primary pb-4" style="border-bottom-style:ridge; margin-bottom:4px; font-style:italic">NOS CONTACTS :</h2>
    <p style="font-family:time new roman">Si vous avez besoin plus d'information sur nous, veuillez contacter les contacts suivants :</p>
    <ul style="font-family:time new roman; list-style-type: circle">
        <li>Service d\'accueil : 034 20 000 11 / schollacc@gmail.com</li>
        <li>Service de scolarité : 034 20 125 12 / schoolsco@gmail.com</li>
        <li>Service Financière : 034 22 245 21 / Schoolfin@gmail.com</li>
    </ul>
    <h5 class="text-center text-primary pb-4" style="border-bottom-style:ridge; margin-bottom:4px; font-style:italic">ADMINISTRATION :</h5>
    <div class="row mt-4">
    <div class="col-sm-2"></div>
    <div class="col-sm-1"><img style="width: 50px;" src="../publics/photos/phone.jpg" alt="phone"/></div>
    <div class="col-sm-7">
    <a href="<tel:+261348658908" class="btn btn-primary btn-block">Call</a>
    </div>
    <div class="col-sm-2"></div>
</div>
<div class="row mt-2">
    <div class="col-sm-2"></div>
    <div class="col-sm-1"><img style="width: 50px;" src="<?php echo URL; ?>publics/photos/mail.jpg" alt="mail"/></div>
    <div class="col-sm-7">
    <a href="mailto:claudel.ceres.p4@gmail.com" class="btn btn-primary btn-block">Email</a>
    </div>
    <div class="col-sm-2"></div>
</div>
    `

    // var titrecontacts = document.createElement('h2');
    // titrecontacts.setAttribute("class", "text-center text-primary pb-4" );
    // titrecontacts.setAttribute("style", "border-bottom-style:ridge; margin-bottom:4px; font-style:italic");
    // titrecontacts.innerHTML="NOS CONTACTS :";
    // contentcontacts.appendChild(titrecontacts);

    contentcontacts.innerHTML=contenucontacts ;

    // var txtcontacts = document.createElement('p');
    // txtcontacts.setAttribute("style", "font-family:time new roman");
    // txtcontacts.innerHTML="Si vous avez besoin plus d'information sur nous, veuillez contacter les contacts suivants :";
    // contentcontacts.appendChild(txtcontacts);

    // var ulcontacts = document.createElement('ul');
    // var li1contacts = document.createElement('li');
    // var li2contacts = document.createElement('li');
    // var li3contacts = document.createElement('li');

    // ulcontacts.setAttribute("style", "font-family:time new roman; list-style-type: circle");
    // li1contacts.innerHTML="Service d\'accueil : 034 20 000 11 / schollacc@gmail.com";
    // li2contacts.innerHTML="Service de scolarité : 034 20 125 12 / schoolsco@gmail.com";
    // li3contacts.innerHTML="Service Financière : 034 22 245 21 / Schoolfin@gmail.com";
    // ulcontacts.appendChild(li1contacts);
    // ulcontacts.appendChild(li2contacts);
    // ulcontacts.appendChild(li3contacts);
    // contentcontacts.appendChild(ulcontacts);

});


var selt1 = document.getElementById('sel1');
var selt2 = document.getElementById('sel2');
var selt3 = document.getElementById('sel3');
var contenuselt = document.getElementById("contenu");


selt1.addEventListener("change", function(event){
    //console.log(this.value)
    
    if(this.value === "coursmodule1"){
        var coursmodule1 = `<h2 class="text-center text-primary pb-4" style="border-bottom-style:ridge; margin-bottom:4px; font-style:italic">LES COURS DU MODULE I :</h2>
        <div class="row ">
            <div class="col-sm-3 border m-2">
                <div class="row" style="width:100%; height:50px;"></div>
                <div class="row">
                    <div class="col-sm-12">
                        <button id="pdf" class="btn btn-outline-secondary btn-block mb-2">Pdf</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button id="explication" class="btn btn-outline-secondary btn-block">Explication</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 border m-2">
                <div class="row" style="width:100%; height:50px;"></div>
                <div class="row">
                    <div class="col-sm-12">
                        <button id="pdf" class="btn btn-outline-secondary btn-block mb-2">Pdf</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button id="explication" class="btn btn-outline-secondary btn-block">Explication</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 border m-2">
                <div class="row" style="width:100%; height:50px;"></div>
                <div class="row">
                    <div class="col-sm-12">
                        <button id="pdf" class="btn btn-outline-secondary btn-block mb-2">Pdf</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button id="explication" class="btn btn-outline-secondary btn-block">Explication</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 border m-2">
                <div class="row" style="width:100%; height:50px;"></div>
                <div class="row">
                    <div class="col-sm-12">
                        <button id="pdf" class="btn btn-outline-secondary btn-block mb-2">Pdf</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button id="explication" class="btn btn-outline-secondary btn-block">Explication</button>
                    </div>
                </div>
            </div>
        </div>
        `;
        contenuselt.innerHTML = coursmodule1;
    }

    else if(this.value === "coursmodule2"){
        var coursmodule2 = `
            <h2 class="text-center text-primary pb-4" style="border-bottom-style:ridge; margin-bottom:4px; font-style:italic">LES COURS DU MODULE II :</h2>

            <div class="row">
                <div class="col-sm-3 border m-2">
                    <div class="row" style="width:100%; height:50px;"></div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button id="pdf" class="btn btn-outline-secondary btn-block mb-2">Pdf</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button id="explication" class="btn btn-outline-secondary btn-block">Explication</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border m-2">
                    <div class="row" style="width:100%; height:50px;"></div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button id="pdf" class="btn btn-outline-secondary btn-block mb-2">Pdf</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button id="explication" class="btn btn-outline-secondary btn-block">Explication</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border m-2">
                    <div class="row" style="width:100%; height:50px;"></div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button id="pdf" class="btn btn-outline-secondary btn-block mb-2">Pdf</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button id="explication" class="btn btn-outline-secondary btn-block">Explication</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border m-2">
                    <div class="row" style="width:100%; height:50px;"></div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button id="pdf" class="btn btn-outline-secondary btn-block mb-2">Pdf</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button id="explication" class="btn btn-outline-secondary btn-block">Explication</button>
                        </div>
                    </div>
                </div>
            </div>
        `;
        contenuselt.innerHTML = coursmodule2;

    }

    else if(selt1.value === "coursmodule3"){
        var coursmodule3 = `<h2 class="text-center text-primary pb-4" style="border-bottom-style:ridge; margin-bottom:4px; font-style:italic">LES COURS DU MODULE III :</h2>
        <div class="row ">
            <div class="col-sm-3 border m-2">
                <div class="row" style="width:100%; height:50px;"></div>
                <div class="row">
                    <div class="col-sm-12">
                        <button id="pdf" class="btn btn-outline-secondary btn-block mb-2">Pdf</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button id="explication" class="btn btn-outline-secondary btn-block">Explication</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 border m-2">
                <div class="row" style="width:100%; height:50px;"></div>
                <div class="row">
                    <div class="col-sm-12">
                        <button id="pdf" class="btn btn-outline-secondary btn-block mb-2">Pdf</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button id="explication" class="btn btn-outline-secondary btn-block">Explication</button>
                    </div>
                </div>
            </div>
        </div>
        `;
        contenuselt.innerHTML = coursmodule3;

    }

    else if(selt1.value === "coursmodule4"){
        var coursmodule4 = `<h2 class="text-center text-primary pb-4" style="border-bottom-style:ridge; margin-bottom:4px; font-style:italic">LES COURS DU MODULE IV :</h2>
        <div class="row ">
        <div class="col-sm-3 border m-2">
                <div class="row" style="width:100%; height:50px;"></div>
                <div class="row">
                    <div class="col-sm-12">
                        <button id="pdf" class="btn btn-outline-secondary btn-block mb-2">Pdf</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button id="explication" class="btn btn-outline-secondary btn-block">Explication</button>
                    </div>
                </div>
        </div>
        <div class="col-sm-3 border m-2">
                <div class="row" style="width:100%; height:50px;"></div>
                <div class="row">
                    <div class="col-sm-12">
                        <button id="pdf" class="btn btn-outline-secondary btn-block mb-2">Pdf</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button id="explication" class="btn btn-outline-secondary btn-block">Explication</button>
                    </div>
                </div>
        </div>
        <div class="col-sm-3 border m-2">
            <div class="row" style="width:100%; height:50px;"></div>
            <div class="row">
                <div class="col-sm-12">
                    <button id="pdf" class="btn btn-outline-secondary btn-block mb-2">Pdf</button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button id="explication" class="btn btn-outline-secondary btn-block">Explication</button>
                </div>
            </div>
        </div>
    </div>
        `;
        contenuselt.innerHTML = coursmodule4;

    }
});


selt2.addEventListener("change", function(){
    // console.log(this.value);

    if(this.value==="exomodule1"){
        var exomodule1 =`<h2 class="text-center text-primary pb-4" style="border-bottom-style:ridge; margin-bottom:4px; font-style:italic">LES EXERCICES DU MODULE I :</h2>
        <div>
            <ul>
            </ul> 
        </div>
        `;
        contenuselt.innerHTML = exomodule1;
    }
    else if(this.value==="exomodule2"){
        var exomodule2 =`<h2 class="text-center text-primary pb-4" style="border-bottom-style:ridge; margin-bottom:4px; font-style:italic">LES EXERCICES DU MODULE II :</h2>
        <div>
            <ul>
            </ul> 
        </div>
        `;
        contenuselt.innerHTML = exomodule2;
    }
    else if(this.value==="exomodule3"){
        var exomodule3 =`<h2 class="text-center text-primary pb-4" style="border-bottom-style:ridge; margin-bottom:4px; font-style:italic">LES EXERCICES DU MODULE III :</h2>
        <div>
            <ul>
            </ul> 
        </div>
        `;
        contenuselt.innerHTML = exomodule3;
    }
    if(this.value==="exomodule4"){
        var exomodule4 =`<h2 class="text-center text-primary pb-4" style="border-bottom-style:ridge; margin-bottom:4px; font-style:italic">LES EXERCICES DU MODULE IV :</h2>
        <div>
            <ul>
            </ul> 
        </div>
        `;
        contenuselt.innerHTML = exomodule4;
    }

});


selt3.addEventListener("change", function(){
    //console.log(this.value)

    if(this.value==="correctionmodule1"){
        var correctionmodule1 = `<h2 class="text-center text-primary pb-4" style="border-bottom-style:ridge; margin-bottom:4px; font-style:italic">LES CORRECTIONS DU MODULE I :</h2>
        <div>
            <ul>
            </ul> 
        </div>
        `;
        contenuselt.innerHTML = correctionmodule1
    }
    else if(this.value==="correctionmodule2"){
        var correctionmodule2 = `<h2 class="text-center text-primary pb-4" style="border-bottom-style:ridge; margin-bottom:4px; font-style:italic">LES CORRECTIONS DU MODULE II :</h2>
        <div>
            <ul>
            </ul> 
        </div>
        `;
        contenuselt.innerHTML = correctionmodule2
    }
    else if(this.value==="correctionmodule3"){
        var correctionmodule3 = `<h2 class="text-center text-primary pb-4" style="border-bottom-style:ridge; margin-bottom:4px; font-style:italic">LES CORRECTIONS DU MODULE III :</h2>
        <div>
            <ul>
            </ul> 
        </div>
        `;
        contenuselt.innerHTML = correctionmodule3
    }
    else if(this.value==="correctionmodule4"){
        var correctionmodule4 = `<h2 class="text-center text-primary pb-4" style="border-bottom-style:ridge; margin-bottom:4px; font-style:italic">LES CORRECTIONS DU MODULE IV :</h2>
        <div>
            <ul>
            </ul> 
        </div>
        `;
        contenuselt.innerHTML = correctionmodule4
    }
});