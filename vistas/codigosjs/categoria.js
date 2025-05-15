var tabla;

function init() {
    mostrarFormulario(false);
    listar();
}

function limpiar() {
    $("#nombre").val("");
    $("#descripcion").val("");
    $("#idcategoria").val("");
}

function mostrarFormulario(x) {
    limpiar();

    if (x) {
        $("#listadoRegistros").hide();
        $("#formularioRegistros").show();
        $("#botonGuardar").prop("disabled", false);
        $("#botonagregar").hide();
    } else {
        $("#listadoRegistros").show();
        $("#formularioRegistros").hide();
        $("#botonagregar").show();
    }
}

function cancelarFormulario() {
    limpiar();
    mostrarFormulario(false);
}

function listar() {
    tabla = $('#tablalistado').dataTable({
        "processing": true, // Activamos el procesamiento del datatables
        "serverSide": true, // Paginación y Filtrado realizados por el servidor
        dom: 'Bfrtip', // Definimos los elementos del control de tabla
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdf'
        ],
        "ajax": {
            url: '../ajax/categoria.php?op=listar',
            type: "get",
            dataType: "json",
            error: function (e) {
                console.log(e.responseText);
            }
        },
        "bDestroy": true,
        "iDisplayLength": 5, // Por defecto muestra 5 registros
        "order": [[1, 'asc']], // Ordenar por la segunda columna
    }).DataTable();
}

init();
