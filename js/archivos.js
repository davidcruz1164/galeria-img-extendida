let archivo = document.getElementById("archivo-file");
let image = document.getElementById("image-preview");
let requisito1 = document.getElementById("requisito1");
let requisito2 = document.getElementById("requisito2");
let requisito3 = document.getElementById("requisito3");

archivo.addEventListener("change", (event) => {
    const imagen = event.target.files[0];
    let width, height;

    image.src = URL.createObjectURL(imagen);
    image.onload = () => {
        width = image.naturalWidth;
        height = image.naturalHeight;
        if (width >= 300 && height >= 300){
            requisito1.style.backgroundColor = "rgb(20, 133, 67)";
        }
        else{
            requisito1.style.backgroundColor = "rgb(221, 74, 98)";
        }
    };

    if (imagen.size > 20000){
        requisito2.style.backgroundColor = "rgb(20, 133, 67)";
    }
    else{
        requisito2.style.backgroundColor = "rgb(221, 74, 98)";
    }
    if (imagen.size < 5228792) {
        requisito3.style.backgroundColor = "rgb(20, 133, 67)";
    }
    else{
        requisito3.style.backgroundColor = "rgb(221, 74, 98)";
    }
});
