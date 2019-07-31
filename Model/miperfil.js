$( document ).ready(function() {
  $( "#perfil" ).click(function() {
    if($("#miperfil").css("display")=="none")
    {
      $("#miperfil").css("display", "block");
    }else{
      $("#miperfil").css("display", "none");
    }
  });

});
