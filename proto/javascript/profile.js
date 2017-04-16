$(document).ready(function(){
    $("#give_privileges").click(function(){
		
		$.get(BASE_URL + "api/admin/give-privileges.php",
			 {id: profile_id},
			 function(data,status,xhr){
				alert("asd");
			
				var status = xhr.status;
			
				if(status == 200)
				{
					$("#give_privileges").hide();
				}
			 });
    });
});