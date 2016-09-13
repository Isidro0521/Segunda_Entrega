$( "#name_T" ).hide();

$( "#hr2" ).hide();

$( "#informacion" ).hide();

$( "#0" ).hide();

$("#Campos").hide();
$("#cantidad").hide();
$("#hr3").hide();

$( "#btn-gBD" ).click(function( event ) {
    event.preventDefault();
    $( "#informacion" ).show(); 
    $( "#0" ).show();   
    $("#name_T").show();
    $("#hr2").show();
    $("#BD_Name").hide();
    $("#hr1").hide();
    $( "#jaja2" ).hide();
    $( "#x" ).hide();

});

$( "#btn-gTD" ).click(function( event ) {
    event.preventDefault();
    $("#TD_Name").hide();
    $("#hr2").hide();
    $( "#jaja2" ).show();
    $( "#x" ).show();
    $("#cantidad").show();
});

$( "#btn-cantidad" ).click(function( event ) {
    event.preventDefault();
    $("jajaja").show();
    $( "#Campos" ).show();
    $( "#hr3" ).show();
});
