//  Mostrar los datos en el modal para editar usuario
$(".table").on("click", ".btnEditarUsuario", function () {
  var codUsuario = $(this).attr("codUsuario");
  var datos = new FormData();

  datos.append("codUsuario", codUsuario);
  $.ajax({
    url: "ajax/usuarios.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",

    success: function (respuesta) {
      $("#editarNombre").val(respuesta["NombreUsuario"]);
      $("#editarCorreo").val(respuesta["CorreoUsuario"]);
      $("#editarPerfil").val(respuesta["NombrePerfil"]);
      $("#codUsuario").val(respuesta["IdUsuario"]);
    }
  });
});

//  Alerta para eliminar un usuario
$(".table").on("click", ".btnEliminarUsuario", function () {
  var codUsuario = $(this).attr("codUsuario");

  swal.fire({
    title: '¿Está seguro de borrar el usuario?',
    text: "¡No podrá revertir el cambio!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, borrar usuario!'
  }).then((result) => {
    if (result.isConfirmed) {
      window.location = "index.php?ruta=usuario&codUsuario="+codUsuario;
    }
  });
});
