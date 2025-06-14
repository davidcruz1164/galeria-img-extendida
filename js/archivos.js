let archivo = document.getElementById("archivo-file");
let image = document.getElementById("image-preview");

archivo.addEventListener("change", (event) => {
    image.src = URL.createObjectURL(event.target.files[0]);
});