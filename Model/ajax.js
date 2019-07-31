function crearXMLHttpRequest(){//funció que crea la connexió del AJAX. el Natiu de Javascript o si no el troba el ActiveXObject. Això dependrà del navegador.
    try{
        // Opera 8.0+, Firefox, Safari, Chrome
        ajaxConnection = new XMLHttpRequest();
    } catch (e){
        // Internet Explorer Browsers
        try{
            ajaxConnection = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try{
                ajaxConnection = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e){
                // Something went wrong
                alert("Your browser broke!");
                return false;
            }
        }
    }

    return ajaxConnection;
}

function ConsultarProductoclass (productos) {
  if (document.getElementById(productos).style.display == 'block') {
    document.getElementById(productos).style.display = 'none';
  }
  else {
    document.getElementById(productos).style.display = 'block';
  }
}

$(document).ready(function(){
  $('.subcategory').click(function(){
    var id = $(this).data('id');
    $('#productos').load('index.php?page=subcategoria&sub='+id, function () {
      // Aquest exemple no us funcionarà si no canvieu la url de la petició
      console.log('Load completed!');
    });
  });
});

function loadprod($file) {
  ajaxConnection = crearXMLHttpRequest();
  ajaxConnection.onreadystatechange = functionProcess;
  ajaxConnection.open("GET", $file ,true);
  ajaxConnection.send();
}

function functionProcess(){
  if(ajaxConnection.readyState == 4 && ajaxConnection.status==200){
    document.getElementById("popup").innerHTML = ajaxConnection.responseText;
    if(document.getElementById("popup").style.display == "block"){
      document.getElementById("popup").style.display = "none";
    } else {
      document.getElementById("popup").style.display = "block";
    }

    $(document).click(function(event) {
      if(!$(event.target).closest('#popup').length) {
        if($('#popup').is(":visible")) {
          document.getElementById("popup").innerHTML = "";
          document.getElementById("popup").style.display = "none";
        }
      }
    });
  }
}
