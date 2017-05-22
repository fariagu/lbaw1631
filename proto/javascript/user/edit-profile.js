$("#confirmation").hide();

$(document).ready(function(){
    $("#delete_button").click(function(e){

		e.preventDefault();

        $("#delete_button").hide();
        $("#confirmation").show();

    });

    $("#cancel").click(function(e){

        e.preventDefault();

        $("#confirmation").hide();
        $("#delete_button").show();
    });
});