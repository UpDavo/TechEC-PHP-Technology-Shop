$(document).ready(function() {
  console.log("Esta cargado el plugin");

  $(document).on("submit", "#formulario_registro", function(event) {
    //cuando el usuario de click en el boton de enviar escucharemos la clase del formulario de registro
    event.preventDefault();
    var $form = $(this);

    var datosFormulario = {
      nombre: $("input[name ='nombre']", $form).val(),
      apellido: $("input[name ='apellido']", $form).val(),
      nick: $("input[name ='nick']", $form).val(),
      mail: $("input[name ='mail']", $form).val(),
      clave1: $("input[name ='clave']", $form).val(),
      clave2: $("input[name ='clave2']", $form).val()
    };

    console.log(datosFormulario);
    if (datosFormulario.mail.length < 6) {
      $("#msg_error")
        .text("Ingresa un email valido")
        .show();
      return false;
    } else if (datosFormulario.clave1.length < 5) {
      $("#msg_error")
        .text("Se necesita una clave con mas de 5 caracteres")
        .show();
      return false;
    } else if (datosFormulario.clave1 != datosFormulario.clave2) {
      $("#msg_error")
        .text("Las claves no coinciden")
        .show();
      return false;
    }

    $("#msg_error").hide();

    var urlphp = "http://localhost/TechEC-1/DAO/procesar_registro.php";

    $.ajax({
      type: "POST",
      url: urlphp,
      data: datosFormulario,
      dataType: "json",
      async: true
    })
      .done(function ajaxDone(res) {
        console.log(res);
        if (res.error != undefined) {
          $("#msg_error")
            .text(res.error)
            .show();
        }
      })
      .fail(function ajaxError(error) {
        console.log(error);
      })
      .always(function ajaxSiempre() {
        console.log("final de la llamada en ajax");
      });
  });

  /*---------------------------------------------------------------------------------*/

  $(document).on("submit", "#formulario_login", function(event) {
    //cuando el usuario de click en el boton de enviar escucharemos la clase del formulario de registro
    event.preventDefault();
    var $form = $(this);

    var datosFormulario = {
      mail: $("input[name ='mail']", $form).val(),
      clave: $("input[name ='clave']", $form).val()
    };

    console.log(datosFormulario);
    if (datosFormulario.mail.length < 6) {
      $("#msg_error")
        .text("Ingresa un email valido")
        .show();
      return false;
    } else if (datosFormulario.clave.length < 5) {
      $("#msg_error")
        .text("Se necesita una clave con mas de 5 caracteres")
        .show();
      return false;
    }

    $("#msg_error").hide();

    var urlphp = "http://localhost/TechEC-1/DAO/procesar_login.php";

    $.ajax({
      type: "POST",
      url: urlphp,
      data: datosFormulario,
      dataType: "json",
      async: true
    })
      .done(function ajaxDone(res) {
        console.log(res);
        if (res.error != undefined) {
          $("#msg_error")
            .text(res.error)
            .show();
        } else {
          window.location.href = res.redirect;
        }
      })
      .fail(function ajaxError(error) {
        console.log(error);
      })
      .always(function ajaxSiempre() {
        console.log("final de la llamada en ajax");
      });
  });
  //Pilas ese tutorial https://www.youtube.com/watch?v=pp3_91FzLb8
});
