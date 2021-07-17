<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no'/>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
<style>
    .cl{
   text-transform: uppercase;
   font-size: 50px;
   margin: 40px auto;
   text-align: center;
   color: rgb(194, 27, 27);
 }
 .pl{
     text-align: center;
 }
 
</style>
</head>
<body>
    <h1 class="cl"> live tracking  application bus GPS system</h1>




<h2 class="pl">Click the start button to get your coordinates.</h2>
<p class="pl">
<button onclick="getLocation()" >Start </button>
<h2 class="pl">Click the stopbutton to get your coordinates.</h2>
<p class="pl"><button onclick="getLocation()" ontouchstart="getLocation()">Stop</button></p>

</p>
<p><strong>Note:</strong> The geolocation property is not supported in IE8 and earlier versions.</p>

<p id="demo"></p>
    
    
    <script>
          var x = document.getElementById("demo");
          function getLocation() {
            setInterval(myTimer,2000)
            function myTimer(){
                
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
      } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
      }
    }
    function showPosition(position) {
      x.innerHTML = "Latitude: " + position.coords.latitude + 
      "<br>Longitude: " + position.coords.longitude;
      ws.send(JSON.stringify({

lat: position.coords.latitude ,
lon:position.coords.longitude
   }));
    }
   
        const ws =new WebSocket("ws://35.184.43.20:8080/api/locations");
        ws.addEventListener("open",e=>{
        });
            }
    </script>
</body>
</html>

<script>
  
    
    
    </script>
