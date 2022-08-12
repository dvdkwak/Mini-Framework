<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your first Route!</title>
    <!-- In the link is an implementation of the public method, this will show a vlaue of the public folder! -->
    <link rel="icon"
          type="image/png"
          href="<?= Raindrop::public("favicon.png"); ?>">
    <style>
        body {
            margin: 0;
            font-family: Helvetica;
            background: deepskyblue;
            color: white;
        }
        .text-box {
            margin: 0 auto;
            max-width: 700px;
            width: 80%;
            position: absolute;
            top: 50px;
            z-index: 2;
            text-align: center;
            left: 0;
            right: 0;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="text-box">
        <h1>Awesome! You have created your first Route!</h1>
        <h3>Now it is time to say goodbye to me... and start your own templates!</h3>
        <h5><i>And by the way! check my file in the editor to see some convient tips to help you get started!</i></h5>
    </div>
</body>
</html>
