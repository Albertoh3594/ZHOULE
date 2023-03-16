/*FUNCION PARA PODER OCULTAR Y VER LA CONTRASEÑA CON EL ICONO DEL OJO*/
$(document).ready(function() {
    $(".toggle-password").click(function() {
        /* alert($(this).attr('toggle')); */
        $(this).toggleClass("zmdi-eye zmdi-eye-off");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });



    /*FUNCION PARA PODER OCULTAR Y VER EL INPUT CONFIRMAR CONTRASEÑA CON EL ICONO DEL OJO*/


    $(".toggle-password-confirmation").click(function() {
        /* alert($(this).attr('toggle')); */
        $(this).toggleClass("zmdi-eye zmdi-eye-off");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
});