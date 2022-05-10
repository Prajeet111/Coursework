<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather app</title>
</head>
<!--style tag helps to make your webpage attractive-->>
<style>
    .weather table{
        padding: 50px 25px;
        border-radius: 20px 20px 20px 20px;
        color: rgb(97, 97, 97);
        font-size: x-large;
        background-color: rgba(255, 248, 220, 0.678)   

    }
    #g1{
        color :rgb(31, 29, 29)
    }
    #back{
         background-image: url('./5.jpeg');
         background-size: 1540px 750px;
         background-repeat: no-repeat;
         
         
    }
    .icon{
       
       margin-left: 125px;
    }
    h1{
        color: white;
    }
    
    </style>
    <!--javascript code to retrieve live weather data from the OpenWeatherMap API -->
<script>
    fetch('https://prajeet111.github.io/Coursework/') //retrive the data from the php.
    .then (function(response){
        return response.json();
    })
    .then (function(answer){
        document.getElementById("description").innerHTML=answer.weather_description
        document.getElementById("city").innerHTML=answer.weather_city
        document.getElementById("tem").innerHTML=answer.weather_temperature+"°C"
        document.getElementById("humidity").innerHTML=answer.weather_humidity + "%"
        document.getElementById("speed").innerHTML=answer.weather_speed+"km/hr"
        document.getElementById("pre").innerHTML=answer.weather_pressure + " hPa"
        document.getElementById("maxtem").innerHTML=answer.weather_maxtemp+"°C"
        document.getElementById("mintem").innerHTML=answer.weather_mintemp+"°C"
        document.getElementById("datetimes").innerHTML=answer.weather_datetimes
        document.getElementById('icon').src=` http://openweathermap.org/img/wn/${answer.weather_icon}@2x.png`
    })

</script>
<body id="back">
    <h1 align="center">Weather app</h1>
    <!--structure of the application-->
    <div class="weather">
        <table align="center">
            
            <tr>
                <th id="g1">Current weather</th>
            </tr>
            <tr>
                <td><img id="icon" src=""></td>
                
            </tr>
            <tr>
                <td>City:</td>
                <td id='city'></td>
                
            </tr>
            <tr>
                <td>Description:</td>
                <td id='description'></td>
                
            </tr>
            <tr>
                <td >Temperature :</td>
                <td id="tem"></td>
            </tr>
            <tr>
                <td >Maximum temperature :</td>
                <td id="maxtem"></td>
            </tr>
            <tr>
                <td >Minimum temperature :</td>
                <td id="mintem"></td>
            </tr>
        
            <tr>
                <td >Pressure :</td>
                <td id="pre"></td>
            </tr>
            <tr>
                <td >Humidity :</td>
                <td id="humidity"></td>
            </tr>
            <tr>
                <td >Wind Speed :</td>
                <td id="speed"></td>
            </tr>     
            <tr>
                <td >Date/Time :</td>
                <td id="datetimes"></td>
            </tr>                   
        </table>
        

    </div>
</body>
</html>