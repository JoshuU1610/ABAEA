const P_nombre = document.getElementById("P_nombre")
const S_nombre = document.getElementById("S_nombre")
const P_apellido = document.getElementById("P_apellido");
const S_apellido = document.getElementById("S_apellido");
const CI = document.getElementById("CI");
const email = document.getElementById("email");
const date = document.getElementById("date");
const Num_P = document.getElementById("Num_P");
const Num_H = document.getElementById("Num_H");
const direc = document.getElementById("direc");
const estado_c = document.getElementById("estado_c");

const form = document.getElementById("form");
const parrafo = document.getElementById("warnigs");

form.addEventListener("submit", e=>{
    e.preventDefault()
    if(P_nombre.value.length <3){
        alert("Nombre muy corto");
    }
});
