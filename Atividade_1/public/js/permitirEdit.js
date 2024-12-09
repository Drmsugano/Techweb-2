function permitirEdit() {
    var tituloInput = document.getElementById("titulo");
    tituloInput.removeAttribute("readonly");
    var autorInput = document.getElementById("autor");
    autorInput.removeAttribute("readonly");
    var precoInput = document.getElementById("preco");
    precoInput.removeAttribute("readonly");
    var button = document.getElementById("editarLivro");
    button.innerHTML = "Edição Permitida";
    button.removeAttribute("disabled");
}