<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .header{
            margin: 0;
            padding: 0;
            height: 50px;
        }
        .header .logo h1{
            margin: 0;
        }
        .header-menu{
            margin-top: 12px;
        }
        ul{
            display: flex;
            align-items: center;
            margin: 0;
            padding: 0;
        }
        ul li{
            display: flex;
            justify-content: center;
            list-style: none;
            margin-right: 10px;
        }
        ul li a{
            text-decoration: none;
            color: #000;
            text-transform: uppercase;
            margin-right: 20px;
            font-weight: 600;
            margin-bottom: 5px;
        }
        ul li a:hover{
            border-bottom: 2px solid #000;
        }
        .icons{
            display: flex;
            margin-top: 12px;
        }
        .icons .search{
            margin-right: 20px;
            margin-left: 20px;
            font-size: 15px;
            font-weight: 600;
            border-right: 1px solid #555;
            border-left: 1px solid #555;
            padding-right: 15px;
            padding-left: 15px;
        }
        .icons .others-icons{
            font-size: 15px;
            font-weight: 600;
        }
        .icons .others-icons i{
            padding-right: 15px;
        }
        .content .layout-1{
            text-align: center;
            background-color: red;
            color: #fff;
            height: 70vh;
            padding-top: 130px;
            margin-top: 20px;
        }
        .content .layout-1 h1{
            font-size: 80px;
        }
        .content .layout-2{
            text-align: center;
            background-color: blue;
            color: #fff;
            height: 70vh;
            padding-top: 130px;
            margin-top: 20px;
        }
        .content .layout-2 h1{
            font-size: 80px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="logo">
                        <h1>Logo</h1>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-6">
                    <div class="header-menu">
                        <ul>
                            <li>
                                <a href="#">
                                    home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    pages
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    blog
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    elements
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    features
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-2">
                    <div class="icons">
                        <div class="search">
                            <i class="bi bi-search"></i>
                        </div>
                        <div class="others-icons">
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-twitter"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-6" style="padding: 0 !important;">
                    <div class="layout-1">
                        <h1>
                            pixel perfect design
                        </h1>
                        <p>we are creative design agency</p>
                    </div>
                </div>
                <div class="col-6" style="padding: 0 !important;">
                    <div class="layout-2">
                        <h1>
                            my first page
                        </h1>
                        <p>my first page</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
