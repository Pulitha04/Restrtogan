<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Grand Grastro</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-image:url("./pic03.png");
            background-position:center left;
            background-repeat:no-repeat;
            background-size:cover;
            color: #f2f6f7;
           /* font-family: Arial, sans-serif;*/
            font-weight: 200;
            height: 50vp;
            width: 50vp;
            margin: 0;
        }

        /*.background-image{
            background-image:url("./admin/assets/img/brand/pic01.png");
            background-color:#ccccc;
            height:500px;
            background-position:center;
            background-repeat:no-repeat;
            background-size:cover;
            position:relative;
        }*/

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
            color: #fafafa;
            
        }

        .links>a {
            color:#fafafa;
            padding: 0 25px;
            font-size: 20px;
            font-weight: bold;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            font-family:Arial, sans-serif;   
            
        }

        .m-b-md {
            margin-bottom: 40px;
            font-family:'Times New Roman', serif;
        }
    </style>
</head>

<body>
    <!--div class = "background-image"-->
        <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                WELCOME TO <br> GRAND GRASTRO
            </div>

            <div class="links">
			
                <a href="Restro/admin/">ADMIN LOG IN</a>
                <a href="Restro/cashier/">CASHIER LOG IN</a>
                <a href="Restro/kitchen/">KITCHEN LOG IN</a>    
                <!--a href="Restro/customer">CUSTOMER LOG IN </a-->
            </div>
        </div>
    </div>
    <!--/div-->
</body>
</html>