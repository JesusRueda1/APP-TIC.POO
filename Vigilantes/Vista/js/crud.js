var Fila = null
function onSubmit() {
        let DataForm = Leer()
        if (Fila == null){
            InsertarDatos(DataForm)
        } else{
            Actualizar(DataForm)
            Vaciar()
    }
}
function Leer() {
    let DataForm = {}
    DataForm["nom"] = document.getElementById("nom").value
    DataForm["ape"] = document.getElementById("ape").value
    DataForm["doc"] = document.getElementById("doc").value
    DataForm["mail"] = document.getElementById("mail").value
    DataForm["rol"] = document.getElementById("rol").value
    DataForm["articulo"] = document.getElementById("articulo").value
    DataForm["dEntrada"] = document.getElementById("dEntrada").value
    DataForm["dSalida"] = document.getElementById("dSalida").value
    return DataForm
}
function InsertarDatos(data) {
    let table = document.getElementById("example").getElementsByTagName('tbody')[0]
    let Fila = table.insertRow(table.length)
    columna1 = Fila.insertCell(0).innerHTML = data.nom
    columna2 = Fila.insertCell(1).innerHTML = data.ape
    columna3 = Fila.insertCell(2).innerHTML = data.doc
    columna4 = Fila.insertCell(3).innerHTML = data.mail
    columna5 = Fila.insertCell(4).innerHTML = data.rol
    columna6 = Fila.insertCell(5).innerHTML = data.articulo
    columna7 = Fila.insertCell(6).innerHTML = data.dEntrada
    columna8 = Fila.insertCell(7).innerHTML = data.dSalida
    columna9 = Fila.insertCell(8).innerHTML = `<input class="submit" type="button" onClick="Editarr(this)" value="Editar" >
                                            <input class="submit" type="button" onClick="Borrarr(this)" value="Borrar" >`
    document.getElementById("nom").focus()
    Vaciar()
}
function Vaciar() {
    document.getElementById("nom").value = ""
    document.getElementById("ape").value = ""
    document.getElementById("doc").value = ""
    document.getElementById("mail").value = ""
    document.getElementById("rol").value = ""
    document.getElementById("articulo").value = ""
    document.getElementById("dEntrada").value = ""
    document.getElementById("dSalida").value = ""
    Fila = null
}
function Editarr(td) {
    Fila = td.parentElement.parentElement
    document.getElementById("nom").value = Fila.cells[0].innerHTML
    document.getElementById("ape").value = Fila.cells[1].innerHTML
    document.getElementById("doc").value = Fila.cells[2].innerHTML
    document.getElementById("mail").value = Fila.cells[3].innerHTML
    document.getElementById("rol").value = Fila.cells[4].innerHTML
    document.getElementById("articulo").value = Fila.cells[5].innerHTML
    document.getElementById("dEntrada").value = Fila.cells[6].innerHTML
    document.getElementById("dSalida").value = Fila.cells[7].innerHTML
}
function Actualizar(DataForm) {
    Fila.cells[0].innerHTML = DataForm.nom
    Fila.cells[1].innerHTML = DataForm.ape
    Fila.cells[2].innerHTML = DataForm.doc
    Fila.cells[3].innerHTML = DataForm.mail
    Fila.cells[4].innerHTML = DataForm.rol
    Fila.cells[5].innerHTML = DataForm.articulo
    Fila.cells[6].innerHTML = DataForm.dEntrada
    Fila.cells[7].innerHTML = DataForm.dSalida
    document.getElementById("nom").focus()
}
function Borrarr(td) {
    if (confirm('¿Seguro de borrar este registro?')) {
        row = td.parentElement.parentElement
        document.getElementById("example").deleteRow(row.rowIndex)
        Vaciar()
    }
}
