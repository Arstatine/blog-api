<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <style>
        *{
            padding: 0;
            margin: 0;
        }

        body{
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #eee;
        }

        div{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        div, h1, a{
            padding: 0;
            margin: 0;
        }

        h1{
            width: 60%;
            text-align: center;
        }

        @media (max-width: 1200px){
            h1{
                width: 80%;
                text-align: center;
            }
        }
    </style>
    <div>
        <h1>Welcome to blog post system api. Just add <a href='/api'>/api</a> to the end of this link to see the list of api calls."</h1>
    </div>
</body>
</html>