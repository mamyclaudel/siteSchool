
var afficher = document.getElementById("showpwd");
const onToggleshowPassword = () =>{
    var pwd = document.getElementById("password");

    if( afficher.checked){
        // pwd.removeAttribute("type");
        pwd.setAttribute("type", "text");
    }else{
        pwd.setAttribute("type", "password");
    }
}

afficher.addEventListener("change", onToggleshowPassword);

