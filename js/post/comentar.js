let textarea = document.getElementById("post-comentarios-textarea");
let enviar = document.getElementById("post-comentarios-enviar");

textarea.value = "asfasfasf"; // Clear the textarea on page load

textarea.addEventListener("input", (e) => {
    if (textarea.value.trim() !== "") {
        enviar.disabled = false;
    } else {
        enviar.disabled = true;
    }
});
