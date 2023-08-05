$(document).on("click","#rg_form",function(){
    console.log("usuario crear");
    $(".card_rg_form").html('<div class="loading"><img src="vistas/images/loader.gif"/><br/></div>');

    
    $.ajax({
        url: "vistas/paginas/registro.php",
        method: "POST",
        success: function(data)
        { 
            $(".card_rg_form").fadeIn(1000).html(data); 
        },

        error: function(obj, typeError, text, data) {
            if (typeError!="abort") {
                alert("se produjo un error en el sistemas verifique!");
            }
        }

    });
    //return false;
});


$(document).on("click","#lg_form",function(){
    console.log("usuario crear");
    $(".card_rg_form").html('<div class="loading"><img src="vistas/images/loader.gif"/><br/></div>');

    
    $.ajax({
        url: "vistas/paginas/ingreso.php",
        method: "POST",
        success: function(data)
        { 
            $(".card_rg_form").fadeIn(1000).html(data); 
        },

        error: function(obj, typeError, text, data) {
            if (typeError!="abort") {
                alert("se produjo un error en el sistemas verifique!");
            }
        }

    });
    //return false;
});