<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>指針時鐘設計</title>
    <style>
        body{
            width: 100vw;
            height: 100vh;
            background-color: #111;
        }
        .main{
            display:flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .box{
            display:flex;
            width: 500px;
            height: 500px;
            position: absolute;
            left:5%;
            top:25%;
            animation: rote 5s infinite linear;
        }
        .glass{
            background-color: rgb(150, 150, 150,0.2);
            display:flex;
            width: 500px;
            height: 500px;
            border-radius: 250px;
            position: absolute;
            left:5%;
            top:25%;
            z-index: 55;
        }
        .bottom{
            background: -webkit-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.7)1%, rgba(255, 221, 205, 0.9)96%);
            display:flex;
            width: 500px;
            height: 500px;
            border-radius: 250px;
            position: absolute;
            left:5%;
            top:25%;
            z-index: -1;
        }
        .top-img{
            position: absolute;
            top:50%;
            width: 591px;
            height: 1000px; 
            z-index: 99;
        }
        .focus{ 
            width: 580px;
            height: 1000px; 
            position: absolute;
            top:50%;
        }
        .gear{
            position: absolute;
        }
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
        ($p==1)?$w=rand(5,80):$w=rand(12,70);
        ($p==1)?$h=rand(22,59):$h=rand(2,75);
        echo "left: ".$w."%;" ;
        echo "top: ".$h."%;" ;
        $t=rand(10,30);
        echo "animation: rote ".$t."s infinite linear;";
        echo "}";
    }       
?>
        @keyframes rote{
            0%{
                transform: rotate(0deg);
            }
            100%{
                transform: rotate(360deg);
            }
        }  
    </style>
</head>
<body>
    <div class="main">
        <img class="top-img" src="./img/bg.png" >
        <div class="focus">
        <div class="glass"></div>
        <div class="bottom"></div>
<?php
    for ($i=1; $i < 21; $i++) { 
    echo "<div class='box box".$i."'><div class='gear gear".$i."'>";
    include "./img/gear-".$i.".svg";
    echo "</div></div>";
    }
?>
    </div></div>
    
</body>
</html>