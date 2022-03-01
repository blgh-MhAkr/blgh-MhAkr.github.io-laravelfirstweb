<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tempat tes animasi</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .kotak{
            width: 200px;
            height: 200px;
            background-color: blue;
            margin: 50px auto;
            display: flex;
        }
        .kotak h3{
            margin: auto;
            font-size: 2em;
        }
    </style>
</head>
<body>
    <div class="kotak" data-tilt data-tilt-scale="1.1">
        <h3>tulisan</h3>
    </div>
    <script type="text/javascript" src="vanilla-tilt.min.js"></script>
    <!--
    <script>
        VanillaTilt.init(document.querySelector('.kotakg'), {
            max: 25,
            speed: 400
        });
    </script>-->
</body>
</html>