<!doctype html>
<html lang="en">
<head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
    <title>create database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            overflow-x: hidden;
            font-family: 'Playfair Display', serif;
        }
        .container-fluid {
            position: relative;
            top: -24px;
            left: 32px;
            font-size: 24px;
        }
        .btn.btn-outline-success {
            position: relative;
            right: -50px;
            bottom: 13px;
            height: 35px;
            border-radius: 5px;
            width: 124px;
            padding-top: 4px;
            background: white;
            color: #2c2b2b;
            font-size: 17px;
        }
        a.navbar-brand {
            position: relative;
            top: 8px;
        }
        nav.navbar.navbar-light.bg-light {
            height: 70px;
        }
        .bg-light {
            background-color: #172634!important;
            color: white;
            font-weight: bolder;
        }
        .navbar-light .navbar-brand {
            color:currentColor;
        }
        .box {
            height: 285px;
            width: 500px;
            background: white;
            position: relative;
            left: 424px;
            border-radius: 7px;
            top: 113px;
            border: 2px solid #9d9b9b;
        }
        input::placeholder{
            font-family: 'Playfair Display', serif;
            font-size: 15px;
        }
        form{
            display: grid;
        }
        label{
            font-weight: bold;
            display: flex;
            font-size: 20px;
            padding-left: 177px;
            margin-top: 28px;
        }
        .form{
            width: 41%;
            padding: 10px 40px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 5px;
            position: relative;
            left: 162px;
            bottom: -25px;
            height: 35px;
            padding-top: 0px;
            /* font-size: 20px; */
        }

        input[type=text]{
            width: 62%;
            padding: 10px 40px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 10px;
            position: relative;
            left: 96px;
            top: 13px;
        }
        .btn:hover{
            background: linear-gradient(90deg, #e3ffe7 0%, #d9e7ff 100%);
        }
        .btn {
            background: linear-gradient(90deg, #141f32 -17%, #f7feff 100%);
            color: black;
            padding: 14px 20px;
            border: none;
            cursor: pointer;
            width: 42%;
            border-radius: 10px;
            margin-top: 46px;
            margin-left: 139px;
            font-family: 'Playfair Display', serif;
            font-size: 15px;
        }

    </style>
</head>
<body>
<header>
<!--   header sections-->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Dynamic Database</a>
            <form class="d-flex">
                <input class="form" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="button">Login</button>
            </form>
        </div>
    </nav>
</header>
<section>
<!--    form for creating database dynamically-->
    <div class="box">
        <form action="/createDB" method="post">
            <label for="databaseName">Database Name</label>
            <input type="text" name="databaseName" autocomplete="off" placeholder="Input database name ">
            <input type="submit" class="btn" name="createDatabase" value="Create Database">
        </form>
    </div>
</section>


</body>
</html>