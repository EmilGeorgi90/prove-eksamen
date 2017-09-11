$(document).ready(function () {
    $(".classes-checkboxes-form").hide();
    $(".filter").on("click", function (Event) {
        Event.preventDefault();
        $(".classes-checkboxes-form").slideToggle(300)
    })
    $(".phoneNav").on("click",function(){
        if($(".form-control").css("display") == "none"){
            console.log
            $("nav .form-control").css("display", "block")
        }else{
            $("nav .form-control").css("display", "none")    
        }
    })
    $(".delete").on("click",function(event){
        event.preventDefault();
        $("deleteText").value = $(".articel" > this + ".articel-title").text();
        console.log($(".articel > ",this," + .articel-title").text())
        console.log(this).value();
        $(this)
    
    })
})