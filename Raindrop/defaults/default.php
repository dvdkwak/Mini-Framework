<?php

/**
 * This file is just a demonstration and startup file for you to show how the framework works in the most simple way.
 *
 *  THIS IS THE DEFAULT VIEW SHOWN WHEN NO ROUTES ARE SET OVER THE HOME
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon"
          type="image/png"
          href="<?= Raindrop::public("../system/defaults/favicon.png"); ?>">
    <title>Rain Drop</title>
    <style>
        body {
            margin: 0;
            background: deepskyblue;
            font-family: Helvetica;
        }
        .container {
            width: 60%;
            min-width: 600px;
        }
        .rainDrop {
            display: block;
            margin: 0 auto;
            height: auto;
            width: 40%;
            max-width: 300px;
            animation: bounceDrop ease-in-out infinite 3000ms;
        }
        .rainDropShadow{
            height: 50px;
            width: 200px;
            margin: -100px auto 0 auto;
            background: transparent;
            border-radius: 100%;
            box-shadow: 0 150px 50px 10px rgba(0, 0, 0, 0.6);
            animation: shadowResize ease-in-out infinite 3000ms;
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
            max-width: 600px;
            width: 40%;
            background: white;
        }
        sidebar.right {
            right: 0;
            padding: 5px 15px;
            overflow-y: scroll;
            box-shadow: -5px 0 10px 5px rgba(0, 0, 0, 0.3);
        }
        p.codeblock {
            display: block;
            background: #343a43;
            border-radius: 10px;
            color: white;
            padding: 10px 15px;
        }
        span.purple {
            color: #a290ff;
        }
        span.yellow {
            color: #deff4f;
        }
        span.green {
            color: #288929;
        }
        h3 {
            margin-top: 50px;
        }
        .quickstart {
            background: #29a2ff;
            padding: 10px 15px;
            border-radius: 10px;
        }
        a.rain {
            display: inline-block;
            background: #222;
            color: white;
            padding: 5px 15px;
            border-radius: 5px;
            text-decoration: none;
        }
        @keyframes shadowResize {
            0% {
                box-shadow: 0 150px 20px 20px rgba(0, 0, 150, 0.4);
                margin-top: -150px;
            }
            50% {
                box-shadow: 0 150px 40px 10px rgba(0, 0, 150, 0.4);
                margin-top: -100px;
            }
            100% {
                box-shadow: 0 150px 20px 20px rgba(0, 0, 150, 0.4);
                margin-top: -150px;
            }
        }
        @keyframes bounceDrop {
            0% {
                padding-top: 50px;
            }
            50% {
                padding-top: 0;
            }
            100% {
                padding-top: 50px;
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
    <h1>Quick Start</h1>
    <div class="quickstart">
        <h3>1. Uncommend the example route in routes.php</h3>
        <p class="codeblock">
            <span class="green">// Start editing here! :D (uncomment the line below)</span>
            <br>
            $route-><span class="yellow">add</span>(<span class="green">'rain', 'example:entry'</span>);
        </p>
        <h3>2. Generate the example controller</h3>
        <p class="codeblock">
            <span class="purple">someone@a-pc folder %</span> php bin/console make:controller example
        </p>
        <h3>3. Enjoy!</h3>
        <p>
            Navigate to: <a class="rain" href="rain">/rain</a>
        </p>
    </div>
    <h1>Short Refference</h1>
    <h3>1. Routes</h3>
    <p>
        A route is a claimed uri-path within the framework. Routes are built by an uri and a controller, and looks like this:
    </p>
    <p class="codeblock">
       $route-><span class="yellow">add</span>(<span class="green">'uri'</span>, <span class="green">'controller:entryMethod'</span>);
    </p>
    <p>
        The controller exists of 2 parts: <i>controller</i> and <i>entryMethod</i>. Controller is the name of the controller, and entryMethod is the method which should be called on the request.
        <br><br>Routes are defined in <b>routes.php</b>, which should never be removed.
    </p>
    <h3>2. Controllers</h3>
    <p>
        Controllers are the main files in which the processing takes place. In here you initialize all of your php code and functionality.
        They should extend the Controller class which is supplied by the system.
    </p>
    <p class="codeblock">
        <span class="purple">namespace</span> Controller;
        <br><br>
        <span class="purple">use</span> Raindrop\src\<span class="green">Controller</span>;
        <br><br>
        <span class="purple">class</span> <span class="green">HelloController</span> <span class="purple">extends</span> <span class="green">Controller</span> {
        <br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="purple">public function</span> <span class="yellow">entryMethod</span>() {
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="yellow">echo</span> <span class="green">"Hello World"</span>;
        <br><br>&nbsp;&nbsp;&nbsp;&nbsp;}
        <br><br>}
    </p>
    <h3>3. Views</h3>
    <p>
        Views are the templates of your application. Views are stored in the "views" folder and are used to display content.
        <br>To retrieve such a view, you can make use of the <b>view</b> method.
        <p class="codeblock">
            <span class="green">Raindrop</span>::<span class="yellow">view</span>(<span class="green">'myView.php'</span>);
        </p>
        <br>
        <br>
        <i><b>Tip:</b> You can use views as php files to include "template parts" by using the php <b>include_once</b> function!</i>
    </p>
    <h3>4. Raindrop</h3>
    <p>
        Raindrop is a folder in which the framework itself lives. you should try to <b>never change something</b> there unless you know what you are doing!
    </p>
</sidebar>
</body>
</html>