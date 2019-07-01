
let divIngredientes = document.querySelector('#adicionarIngrediente')

function adicionarIngrediente(){

    let listaIngrediente = document.createElement('li');

    listaIngrediente.innerHTML =     
    `<div class="form-inline removeDiv">
    <div class="form-group">
        <input type="text" class="form-control mb-2" name="ingrediente[]" placeholder="ingrediente" required>
    </div>
    <div class="form-group mx-sm-3 mb-2">
        <input type="text" class="form-control" name="ingrediente[]" placeholder="quantidade" required>
    </div>
    <a onclick="removerIngrediente()" class="btn btn-outline-success btn-sm">-</a>
    </div>`

    divIngredientes.appendChild(listaIngrediente)

}

function removerIngrediente(){
    let remove = document.querySelector('.removeDiv').parentNode
    remove.remove()
}




