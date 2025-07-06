let archivo = document.getElementById("archivo-file");
let image = document.getElementById("image-preview");
let requisito1 = document.getElementById("requisito1");
let requisito2 = document.getElementById("requisito2");
let requisito3 = document.getElementById("requisito3");

let textbox = document.getElementById("titulo-input");
let enviar = document.getElementById("btn-enviar");

export let req1 = false, req2 = false, req3 = false;
import {tags_introducidos} from "./tags.js";

archivo.addEventListener("change", (event) => {
    const imagen = event.target.files[0];
    let width, height;

    image.src = URL.createObjectURL(imagen);
    image.onload = () => {
        width = image.naturalWidth;
        height = image.naturalHeight;
        if (width >= 400 && height >= 300){
            requisito1.style.backgroundColor = "rgb(20, 133, 67)";
            req1 = true;
        }
        else{
            requisito1.style.backgroundColor = "rgb(221, 74, 98)";
            req1 = false;
        }

        if (req1 && req2 && req3 && tags_introducidos > 0 && textbox.value.trim() != "") {
            enviar.disabled = false;
        } else {
            enviar.disabled = true;
        }
    };

    if (imagen.size > 20000){
        requisito2.style.backgroundColor = "rgb(20, 133, 67)";
        req2 = true;
    }
    else{
        requisito2.style.backgroundColor = "rgb(221, 74, 98)";
        req2 = false;
    }
    if (imagen.size < 5228792) {
        requisito3.style.backgroundColor = "rgb(20, 133, 67)";
        req3 = true;
    }
    else{
        requisito3.style.backgroundColor = "rgb(221, 74, 98)";
        req3 = false;
    }
});

textbox.addEventListener("input", (e) => {
    if (req1 && req2 && req3 && tags_introducidos > 0 && e.target.value.trim() != ""){
        enviar.disabled = false;
    }
    else{
        enviar.disabled = true;
    }
});
