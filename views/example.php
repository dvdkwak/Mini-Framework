<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            background: deepskyblue;
            font-family: Helvetica;
        }
        .container {
            width: 60%;
        }
        .rainDrop {
            display: block;
            margin: 0 auto;
            height: auto;
            width: 40%;
            max-width: 300px;
        }
        .rainDropShadow{
            height: 50px;
            width: 200px;
            margin: -100px auto 0 auto;
            background: transparent;
            border-radius: 100%;
            box-shadow: 0 150px 50px 10px rgba(0, 0, 0, 0.6);
            animation: bounceDrop ease-in-out infinite 3000ms;
        }
        .title {
            font-family: Helvetica;
            color: white;
            font-size: 64px;
            font-weight: normal;
            text-align: center;
        }
        .subtitle {
            font-family: Brush Script MT;
            color: white;
            font-size: 42px;
            text-align: center;
        }
        sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            min-width: 300px;
            width: 40%;
            background: white;
        }
        sidebar.right {
            right: 0;
            padding: 5px 10px;
            overflow-y: scroll;
        }
        @keyframes bounceDrop {
            0% {
                margin: -100px auto 0 auto;
                box-shadow: 0 150px 20px 20px rgba(0, 0, 150, 0.4);
            }
            50% {
                margin: -50px auto 0 auto;
                box-shadow: 0 150px 40px 10px rgba(0, 0, 150, 0.4);
            }
            100% {
                margin: -100px auto 0 auto;
                box-shadow: 0 150px 20px 20px rgba(0, 0, 150, 0.4);
            }
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="title">Rain Drop</h1>
    <h2 class="subtitle">The very clean mini-framework!</h2>
    <!--logo of the package-->
    <!-- Ik ben er nog niet achter waarom, maar een verhouding van 3:4 schijnt te werken -->
    <!-- viewbox moet een breedte en hoogte hebben van 30:40 ipv 3:4 dat werkt blijkbaar niet -->
    <svg class="rainDrop" viewbox="0 0 30 40" width="30" height="40">
        <path fill="#fff" stroke="#fff" stroke-width="1.0"
              d="M15 3
               Q16.5 6.8 25 18
               A12.8 12.8 0 1 1 5 18
               Q13.5 6.8 15 3z" />
    </svg>
    <!-- Beneath the svg a shadow to make it look like the drop is going up and down -->
    <div class="rainDropShadow"></div>
</div>
<!-- a bar with some rain on the right -->
<sidebar class="right">
    <h1>How does it work?</h1>
    <p>
        Beneath here will be some explenation on how to use this framework.
    </p>
</sidebar>
</body>
</html>