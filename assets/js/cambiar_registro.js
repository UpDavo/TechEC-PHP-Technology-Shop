function cambiar(id) {
  event.preventDefault();
  let confirmado = confirm(
    "Estas seguro que quieres registrar este pedido como enviado?, Una vez cambiado el estado este no puede ser alterado"
  );
  if (confirmado) {
    var datosUsuario = {
      nombre: id
    };
    var urlphp = "https://techec.herokuapp.com/TechEC-1/DAO/procesar_cambio.php";

    $.ajax({
      type: "POST",
      url: urlphp,
      data: datosUsuario,
      dataType: "json",
      async: true
    })
      .done(function ajaxDone(res) {
        console.log(res);
        location.href = res.redirect;
      })
      .fail(function ajaxError(error) {
        console.log(error);
      })
      .always(function ajaxSiempre() {
        console.log("final de la llamada en ajax");
      });
  }
}
