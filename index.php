<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./mystyle.css">
    <title>指針時鐘設計</title>
    <style>
<?php
    for ($i=1; $i < 21; $i++) { 
        echo ".box".$i."{";
        $t=rand(5,15); 
        echo "animation: rote ".$t."s infinite linear;";
        echo "}";
    }
    for ($i=1; $i < 21; $i++) {      
        echo ".gear".$i."{";
        $p=rand(1,2);
        ($p==1)?$w=rand(5,75):$w=rand(12,65);
        ($p==1)?$h=rand(22,59):$h=rand(5,75);
        echo "left: ".$w."%;" ;
        echo "top: ".$h."%;" ;
        $t=rand(10,30);
        echo "animation: rote ".$t."s infinite linear;";
        echo "}";
    }       
?>
    </style>
</head>
<body>

    <div></div>
    <div class="main">
        <img class="top-img" src="./img/bg.png" >
        <div class="focus">
        <img class="hrs" id="hrs" style="width: 500px;height: 500px;" src="./img/time-01.png">
        <img class="min" id="min" style="width: 500px;height: 500px;" src="./img/time-02.png">
        <img class="sec" id="sec" style="width: 500px;height: 500px;" src="./img/time-03.png">
        <div class="glass"></div>
        <div class="bottom"></div>
        <div class="bottom2"></div>
<?php
    for ($i=1; $i < 21; $i++) { 
    echo "<div class='box box".$i."'><div class='gear gear".$i."'>";
    echo "<img src='./img/gear-".$i.".svg' style='width: 100px;height: 100px;'>";
    echo "</div></div>";
    }
?>
    </div></div>
    <button class="reset" onclick="javascript:window.location.reload()">萬花筒變更</button>
<script>
        setTime()
        function setTime() {           
            let time =new Date();
            let sec=time.getSeconds();
            let min=time.getMinutes();
            let hour=time.getHours();
            let x=sec*6;
            let y=(min*60+sec)*0.1;
            let z=(hour*60+min)*0.5;
            document.querySelector("#min").style.transform=`rotate(${y}deg)`
            document.querySelector("#hrs").style.transform=`rotate(${z}deg)`
            document.querySelector("#sec").style.transform=`rotate(${x}deg)`
        }
        setInterval(setTime,1000);
</script>  
</body>
</html>