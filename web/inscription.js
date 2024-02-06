function validerDateOfBirth(){
    var elementDate=document.getElementById("date_naissance");
    var elementValue = new Date(elementDate.value);
    const dateAujourdhui = new Date();
    if(elementValue>=dateAujourdhui){
        alert("La date de naissance doit être inférieure à la date d'aujourd'hui");
    }
    else{
        alert("Date de naissance valide");
    }

} 