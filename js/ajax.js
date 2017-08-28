$(document).ready(function () {
    $(".li-item a").click(function (event) {
        event.preventDefault();
        $(".ajax-content").load("./include/" + $(this).text() + "-ajax.php", function (responseTxt, statusTxt, xhr) {
            if (statusTxt == "error") alert("Error: " + xhr.status + ": " + xhr.statusText);
        });
    });
})