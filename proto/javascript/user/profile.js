$(document).ready(function(){
	$(document).on("click", ".give_privileges", function(e){
		
		e.preventDefault();
		
		$.ajax({
			url  : BASE_URL + "api/admin/give-privileges.php",
			type : 'get',
			data : {id: profile_id}
		}).done(function(data, statusText, xhr){
			var status = xhr.status;
		
			if(status == 200)
			{
				$("#give_privileges").remove();
			}
		});
    });
	
	$(document).on("click", ".ban", function(e){
		
		e.preventDefault();
		
		$.ajax({
			url  : BASE_URL + "api/admin/ban-user.php",
			type : 'get',
			data : {id: profile_id}
		}).done(function(data, statusText, xhr){
			var status = xhr.status;
		
			if(status == 200)
			{
				var str = '<button type="submit" class="btn btn-default unban">Unban</button>';
				
				$(".ban").before(str);
				$(".ban").remove();
				$(".give_privileges").remove();
			}
		});
    });
	
	$(document).on("click", ".unban", function(e){
		
		e.preventDefault();
		
		$.ajax({
			url  : BASE_URL + "api/admin/unban-user.php",
			type : 'get',
			data : {id: profile_id}
		}).done(function(data, statusText, xhr){
			var status = xhr.status;
		
			if(status == 200)
			{
				var str = '<button type="submit" class="btn btn-default give_privileges">Give Admin Privileges</button>' + 
							'<button type="submit" class="btn btn-default ban">Ban</button>';
				
				$(".unban").before(str);
				$(".unban").remove();
			}
		});
    });
});