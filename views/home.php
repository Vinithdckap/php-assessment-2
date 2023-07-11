<!doctype html>
<html lang="en">
<head>
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Playfair Display', serif;
            /*font-style: italic;*/
            overflow-x: hidden;
        }
        .container-fluid {
            position: relative;
            top: -24px;
            left: 32px;
            font-size: 24px;
        }
        img {
            border-radius: 20px;
            position: relative;
            left: 344px;
            top: 63px;
        }
        .btn.btn-outline-success {
                position: relative;
                right: 51px;
                top: 33px;
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

        .allBtns button {
            font-family: 'Playfair Display', serif;
            border: 1px solid white;
            padding: 10px 24px;
            cursor: pointer;
            float: left;
            background: linear-gradient(90deg, #141f32 -17%, #f7feff 100%);
            border-radius: 15px;
            font-size: 20px;
            color: black;

            width: 230px;
            position: relative;
            left: 308px;
            top: 43px;
        }

        .form{
            width: 64%;
            padding: 10px 40px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 5px;
            position: relative;
            right: 81px;
            bottom: -25px;
            height: 35px;
            padding-top: 7px;
            font-size:15px;
        }
        .btn:hover{
            background: linear-gradient(90deg, #e3ffe7 0%, #d9e7ff 100%);
        }
        a.navbar-brand {
            position: relative;
            top: 20px;
        }
        h1 {
            text-align: center;
            position: relative;
            top: 25px;
        }
        .allBtns:after {
            content: "";
            clear: both;
            display: table;
        }
        .allBtns button:not(:last-child) {
            border-right: none;
        }

        .allBtns button:hover {
            background: linear-gradient(90deg, #FDBB2D 0%, #22C1C3 100%);
        }
    </style>
</head>
<body>
<header>
<!--    header sections-->
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
    <h1>Dynamic Database</h1>
<!--    creating three buttons to create dynamic database and tables-->

    <div class="allBtns">
        <form action="/createDB" method="post">
            <button class="db" type="submit" name="create_database">Create Database</button>
        </form>
        <form action="/createTable" method="post">
            <button class="table" type="submit">Create table</button>
        </form>
        <form action="/createColumn" method="post">
            <button class="column" type="submit" name="add_column">Insert Data</button>
        </form>
    </div>
    <img src="https://d1.awsstatic.com/ac-how-to-choose-database.dec8dee8a0351f6eccddde1f930c19b105b418f7.png">
</section>
</body>
</html>