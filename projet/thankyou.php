<html>

    <head>
    <title>THANK YOU</title>
        <meta http-equiv="refresh" content="5;URL=connexion.php">
    <style>
        body {
  background: darkgreen;
}
        *{
            margin:0;
            padding: 0;
            box-sizing: border-box;
        }
        .loader{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 200px;
            height: 140px;

        }
        .text{
            position: absolute;
            bottom: -30px;
            left: 20%;
            transform: transate(-30%, 0);
            overflow: hidden;
            border-left: 1px solid black;
            border-right: 1px solid black;
        }
        .text1{
            position: absolute;
            bottom: -50px;
            left: 20%;
            transform: transate(-30%, 0);
            overflow: hidden;
            border-left: 1px solid black;
            border-right: 1px solid black;
        }
        .text span{
            display: inline-block;
            animation: moveLeft 1.95s linear infinite;
            font-size: 30px;
        }
        .text1 span{
            display: inline-block;
            animation: moveLeft 2s linear infinite;
            font-size: 20px;
        }
        .text span::before{
            content: 'MERCI';
            display: inline-block;
            width: 140px;
            height: 30px;
            position: absolute;
            left: 110%;
            top: 0;}
        .text1 span::before{
            content: 'attendez ...';
            display: inline-block;
            width: 140px;
            height: 20px;
            position: absolute;
            left: 100%;
            top: 0;
        }
.droid {
    --size: 140px;
    position: absolute;
    margin-left: 0;
    width: var(--size);
    top: 0;
    left: 0%;
    z-index: 4;
    animation: wobble 5s ease-in-out infinte;
}
.radios {
    position: absolute;
    transition: left 0.6s;
    left: 0%;
}
.radios.right {
    left: 0%;
}
.radio {
    background: #f0e5d6;
    position: absolute;
    width: 2px;
}
.radio.short {
    height: 20px;
    top: -60px;
    left: 50px;
}
.radio.long {
    border-top: 6px solid #020204;
    border-bottom: 6px solid #020204;
    height: 36px;
    top: -78px;
    left: 56px;
}
.head {
    background: #dad5cd;
    border-radius: 90px 90px 14px 14px;
    -moz-border-radius: 90px 90px 14px 14px;
    -webkit-border-radius: 90px 90px 14px 14px;
    height: 56px;
    margin-left: -45px;
    overflow: hidden;
    position: absolute;
    width: 90px;
    z-index: 1;
    top: -46px;
    left: 50%;
    border: 1px solid black;
}
.band {
    position: absolute;
    width: 100%;
}
.band.one {
    background: rgb(159,154,154);
    height: 6px;
    z-index: 1;
    top: 6px;
    opacity: .8;
}
.band.two {
    background: rgb(210,124,71);
    height: 4px;
    top: 17px;
}
.band.three {
    background: rgb(188,179,179);
    height: 4px;
    top: 27px;
}
.eyes {
    display: block;
    height: 100%;
    position: absolute;
    width: 100%;
    transition: left .6s;
    left: 36%;
    z-index: 10;
}

.eye {
    border-radius: 50%;
    display: block;
    position: absolute;
}
.eye.one {
    background: #0f0f1a;
    border: 4px solid #d0c5b5;
    height: 30px;
    width: 30px;
    top: 12px; left: 12%;
}
.eye.one::after {
    background: white;
    border-radius: 50%;
    content: '';
    display: block;
    height: 3px;
    position: absolute;
    width: 3px;
    top: 4px;
    right: 4px;
}
.eye.two {
    background: #ddd2c2;
    border: 1px solid #06060e;
    height: 16px;
    width: 16px;
    top: 30px;
    left: 40%;
}
.eye.two::after {
    background: #07070b;
    border-radius: 50%;
    content: '';
    display: block;
    height: 10px;
    width: 10px;
    position: absolute;
    top: 2px; 
    left: 2px;
}
.body {
    background: #ded7ce;
    border-radius: 50%;
    height: var(--size);
    overflow: hidden;
    position: relative;
    width: var(--size);
    border: 1px solid black;
    animation: roll 5.2s linear infinite;
}
.lines {
    border: 2px solid rgb(167,145,108);
    border-radius: 50%;
    height: 400px;
    width: 400px;
    position: absolute;
    opacity: .6;
}
.lines.two {
    top: -10px;
    left: -250px;
}
.circle {
    background: rgb(180,102,54);
    border-radius: 50%;
    height: 70px;
    margin-left: -35px;
    width: 70px;
    position: absolute;
}
.circle::after {
    background: #d1c3ad;
    border-radius: 50%;
    content: '';
    display: block;
    height: 70%;
    margin-top: -35%;
    margin-left: -35%;
    position: absolute;
    width: 70%;
    top: 50%;
    left: 50%;
}
.circle.one {
    margin-left: -40px;
    height: 80px;
    width: 90px;
    top: 6%;
    left: 50%;
}
.circle.two {
    height: 38px;
    width: 76px;
    transform: rotate(40deg);
    top: 70%;
    left: 18%;
}
.circle.two::after {
    top: 110%;
}

.circle.three {
    height: 30px;
    transform: rotate(-50deg);
    top: 66%;
    left: 90%;
}
.circle.three::after {
    top: 110%;
}
        @keyframes wobble{
            0% {
                transform: rotate(0);
            }
            50%{
                transform: rotate(10deg);
            }
            100%{
                transform: rotate(0);
            }
        }
        @keyframes roll{
            from{
                transform: rotate(0);
            }
            to{
                transform: rotate(360deg);
            }
        }
        @keyframes moveLeft{
            from{
                transform: translateX(0);
            }
            to{
                transform: translateX(-110%);
            }
        }
        </style>
    </head>
    <body>
<div class="loader">
 <div class="droid">
  <div class="radios">
    <div class="radio short"></div>
    <div class="radio long"></div>
  </div>
  <div class="head">
    <div class="band one"></div>
    <div class="band two"></div>
    <div class="eyes">
      <div class="eye one"></div>
      <div class="eye two"></div>
    </div>
    <div class="band three"></div>
  </div>
  <div class="body">
    <div class="lines one"></div>
    <div class="lines two"></div>
    <div class="circle one"></div>
    <div class="circle two"></div>
    <div class="circle three"></div>
</div>
</div>
    <div class="text">
    <span>MERCI</span>
    </div>
    <div class="text1">
    <span>attendez ...</span>
    </div>
    </div>
        
        
    </body>
</html>