<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CenterHome</title>
    <link rel="shortcut icon" type="image/x-icon" href="logo150.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <h1>COMING SOON</h1>
        <div id="clock-times">
            <div class="items">
                <span id="days">8</span>
                <div class="title">Days</div>
            </div>
            <div class="items">
                <span id="hours">8</span>
                <div class="title">Hours</div>
            </div>
            <div class="items">
                <span id="minutes">8</span>
                <div class="title">Minutes</div>
            </div>
            <div class="items">
                <span id="seconds">8</span>
                <div class="title">Seconds</div>
            </div>
        </div>
    </div>
    <script>
        var countDownDate = new Date("Jan 01, 2023 00:00:00").getTime();
        
        var countdownfunction = setInterval(function() {
        
          var now = new Date().getTime();
          
          var distance = countDownDate - now;
          
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
          
          document.getElementById("days").innerHTML = days;
          document.getElementById("hours").innerHTML = hours;
          document.getElementById("minutes").innerHTML = minutes;
          document.getElementById("seconds").innerHTML = seconds;
          
        }, 1000);

        
        // document.addEventListener("contextmenu", function(e){
        //     e.preventDefault();
        // });

    </script>
</body>
</html>