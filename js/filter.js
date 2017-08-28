$(document).ready(function () {
    $(".classes-checkboxes-form").hide();
    $(".filter").on("click", function (Event) {
        Event.preventDefault();
        if ($(".classes-checkboxes-form").css("display") == "none") {
            $(".classes-checkboxes-form").show();
        }
        else {
            $(".classes-checkboxes-form").hide();
        }
    })
})