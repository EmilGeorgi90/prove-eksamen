$(document).ready(function () {
    $(".li-item a").click(function (event) {
        if ($(this).text() != "logout") {
            event.preventDefault();
            $(".ajax-content").load("./include/" + $(this).text() + "-ajax.php", function (responseTxt, statusTxt, xhr) {
                if (statusTxt == "error") alert("Error: " + xhr.status + ": " + xhr.statusText);
            });
        }
        else {}
    });
        $("button").click(function (event) {
            event.preventDefault();
            $(this).children(".update").slideDown("slow");
        });
})