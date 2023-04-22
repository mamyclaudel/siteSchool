
var afficher = document.getElementById("showpwd");

afficher.addEventListener("change", function(){
    var pwd = document.getElementById("password");

    if( afficher.checked){
        // pwd.removeAttribute("type");
        pwd.setAttribute("type", "text");
    }else{
        pwd.setAttribute("type", "password");
    }
});