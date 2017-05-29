$(document).ready(function(){
    $(".searchUsers").click(function(e){
		
		e.preventDefault();
		
		var textTyped = $("#search").val();
		
		console.log(textTyped);
		
		$.getJSON(BASE_URL + "api/management/search-users.php", {content: textTyped}, function(data) {
			
			$(".list-group a").remove();
			
			$.each(data, function(i, user) {
				
				  var str = '<a href="' + BASE_URL + 'pages/user/profile.php?id=' + user.id + '" class="list-group-item">' + user.username + '</a>';
				  $(".list-group").append(str);
			  });
		});		
    });
});