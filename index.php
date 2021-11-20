<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style type="text/css">
        body, html{
            width: 100%;
            height: 100%;
            background-image: url("images/bg_index.png");
            background-position: center;
            background-size: auto 100%;
            background-repeat: no-repeat;
        }

        .main-container{
            background: transparent;
            text-align: center;
        }

        h1{
            padding-top: 15%;
            font-family: "Poppins", sans-serif;
            font-style: normal;
            font-weight: bold;
            font-size: 96px;
            color: #000000;
        }

        .text{
            margin-top: 20px;
            font-family: "Poppins", sans-serif;
            font-style: normal;
            font-weight: 500;
            font-size: 28px;
            color: #000000;
        }

        .btn{
            width: 194px;
            height: 72px;
            margin-top: 20px;
            font-weight: 600;
            letter-spacing: 0.1em;
            font-family: "Poppins", sans-serif;
            font-style: normal;
        }
    </style>

</head>
<body>
    <div class="main-container">
        <h1>FPstudio</h1>
        <div class="text" style="text-decoration-line: underline;">FPstudio@gmail.com</div>
        <div class="text">Based in Yogyakarta</div>

        <form action="homepage.php" method="post">
            <input type="submit" class="btn btn-outline-dark" value="Enter"></input>
        </form>
    </div>
        
</body>
</html>