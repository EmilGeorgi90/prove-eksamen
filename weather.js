$(document).ready(function(){
    $("#submitWeather").on("click",function(event){
        event.preventDefault();
        var city = $("#text").val();
        if(city != ''){
            $.ajax({
                url: "https://api.openweathermap.org/data/2.5/weather?q="+ city +"&units=metric" + "&appid=77ad54dbd78f34218fa7c02a8e81fc9b",
                type: "GET",
                dataType: "jsonp",
                success: function(data){
                    $(".the-weather").text(data.weather[0].main)
                }
            });
        }else{
            console.log("the field cant be empty")
        }
    })
})