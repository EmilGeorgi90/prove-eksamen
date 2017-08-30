$(document).ready(function () {
    $(".classes-checkboxes-form").hide();
    $(".filter").on("click", function (Event) {
        Event.preventDefault();
        $(".classes-checkboxes-form").slideToggle(300)
            /*
            if ($(".classes-checkboxes-form").css("display") == "none") {
                $(".classes-checkboxes-form").show();
            }
            else {
                $(".classes-checkboxes-form").hide();
            }
            */
    })
})