$(document).ready(function(){
    $(".searchReports").click(function(e){

        e.preventDefault();

        var textTyped = $("#search").val();

        console.log(textTyped);

        $.getJSON(BASE_URL + "api/admin/search-reports.php", {content: textTyped}, function(data) {

            $(".list-group a").remove();

            $.each(data, function(i, report) {

                var str = '<a href="' + BASE_URL + 'pages/admin/report.php?id_member=' + report.id_member + '   &id_post=' + report.id_post + '" class="list-group-item">' + report.description + '</a>';
                $(".list-group").append(str);
            });
        });
    });
});