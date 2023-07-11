<html lang="en">
<head>
    <title> Create task</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            font-family: 'Playfair Display', serif;
            overflow-x: hidden;
        }
        .container-fluid {
            position: relative;
            top: -24px;
            left: 32px;
            font-size: 24px;
        }
        a.navbar-brand {
            position: relative;
            top: 13px;
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

        .btn:hover{
            background: linear-gradient(90deg, #e3ffe7 0%, #d9e7ff 100%);
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
        a.navbar-brand {
            position: relative;
            top: 13px;
        }
        h1 {
            text-align: center;
            position: relative;
            top: 25px;
        }
        .box {
            position: relative;
            left: 447px;
            top: 59px;
            height: 460px;
            width: 500px;
            border: 2px solid #9d9b9b;
            border-radius: 7px;
        }
        label {
            padding-top: 56px;
            padding-left: 47px;
        }


    </style>
</head>
<body>
<header>
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

<h1>Insert values</h1>
<!--creating forms for the database selections-->
<div class="box">
    <form action="/createColumn" method="post">
        <label for="databaseName">Database Name</label>
        <select name="selectDatabase"id="databaseName" >
            <?php foreach($db as $name=>$data): ?>
                <option value="<?php echo $data->Database ?>"><?php echo $data->Database ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Select DB</button>
    </form>

<!--    creating tables-->
<div class="tableLists">
    <form action="/createColumn" method="post">
        <select name="tableName" class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500>
                                      <?php foreach($this->tablesList as $table=>$tablesList): ?>
                        <option value="<?php echo $tablesList->tablesNameList ?>"><?php echo $tablesList->tablesNameList ?></option>
        <?php endforeach; ?>
        </select>
    </form>
</div>


<!--    creating columns-->
<div class="columnLists">
    <form action="/createColumn" method="post">
        <input type="text" class="" name="columnName[]">
        <select name="dataTypes[]" class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500>
                    <option value="int">Number</option>
        <option value="varchar(255)">Text</option>
        <option value="timestamp">Date Time</option>
        </select>
        <button id="addDataa">Insert Data</button>
    </form>
</div>
</div>
</div>
</body>
</html>