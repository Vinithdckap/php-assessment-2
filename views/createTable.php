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
            overflow-y: hidden;
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
            bottom: -12px;
            height: 35px;
            border-radius: 5px;
            width: 124px;
            padding-top: 4px;
            background: white;
            color: #2c2b2b;
            font-size: 17px;
            padding: 0px;

        }
        a.navbar-brand {
            position: relative;
            top:20px;
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
        .box{
            height: 460px;
            width: 500px;
            background: white;
            position: relative;
            left: 449px;
            border-radius: 7px;
            top: 17px;
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
            bottom: -10px;
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
        label.tableLabel {
            position: relative;
            top: -49px;
        }


        select#databaseName {
            height: 34px;
            width: 170px;
            border: none;
            border-radius: 7px;
            margin-left: 253px;
            position: relative;
            top: -57px;
            font-family: 'Playfair Display', serif;
            padding-left: 20px;
        }
        .data{
            height: 38px;
            width: 170px;
            border: none;
            border-radius: 7px;
            margin-left: 253px;
            position: relative;
            top: -196px;
            right: 4px;
            font-family: 'Playfair Display', serif;
            padding-left: 20px;
        }
        input.btn {
            position: relative;
            bottom: 173px;
        }
        .addRow {
            position: relative;
            bottom: 143px;
        }
        input::placeholder{
            font-family: 'Playfair Display', serif;
            font-size: 15px;
        }
        form{
            display: grid;
            position: relative;
            top: 15px
        }
        label{
            font-weight: 500;
            display: flex;
            font-size: 20px;
            padding-left: 77px;
            position: relative;
            top:-27px;
            left: -25px;
        }


        input[type=text]{
            width: 52%;
            padding: 10px 40px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 10px;
            position: relative;
            left: 207px;
            top: -165px;
        }

        .btn:hover{
            background: linear-gradient(90deg, #e3ffe7 0%, #d9e7ff 100%);
        }
        #btn:hover{
            background: linear-gradient(90deg, #FDBB2D 0%, #22C1C3 100%);
        }
        input.table {
            position: relative;
            top: -96px;
            left: 206px;
        }
        label.column {
            /* padding-bottom: 34px; */
            position: relative;
            top: -121px;
        }
        label.datatype {
            position: relative;
            top: -163px;

        }
        .btn,#btn {
            background: linear-gradient(90deg, #141f32 -17%, #f7feff 100%);
            color: black;
            padding: 14px 67px;
            border: none;
            cursor: pointer;
            width: 42%;
            border-radius: 10px;
            margin-top: 6px;
            margin-left: 139px;
            font-family: 'Playfair Display', serif;
            font-size: 15px;
        }
        h1 {
            padding-left: 585px;
            padding-top: 23px;
        }


    </style>
</head>
<body>
<!--header sections-->
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
<section>
<!-- creating form for database-->
    <h1>Create table</h1>
    <div class="box">
        <form action="/createTable" method="post">
            <label for="databaseName">Database Name</label>
            <select name="selectDatabase"id="databaseName" >
                <?php foreach($db as $name=>$data): ?>
                    <option value="<?php echo $data->Database ?>"><?php echo $data->Database ?></option>
                <?php endforeach; ?>
            </select>
<!--creating table-->
            <label class="tableLabel" for="tableName">Table Name:</label>
            <input type="text" autocomplete="off" class="table" name="tableName" id="tableName" placeholder="Enter table name">
            <br>
            <label class="column" for="columnName">Column Name:</label>
            <input type="text" name="columnName[]" autocomplete="off" id="columnName" placeholder="Enter Column name">

<!--            selecting datatype for the tables-->
            <div class="selects">
                <label for="select" class="datatype">Select Datatype:</label>
                <select name="datatype[]" class="data">
                    <option value="">select datatype</option>
                    <option value="int">Number</option>
                    <option value="varchar(255)">Text</option>
                    <option value="timestamp">Date time</option>
                </select>
            </div>
            <input type="submit" class="btn" name="createTable" value="Create Table">
        </form>

<!--        creating add more row buttons for more columns to the table-->
        <div class="addRow">
            <button type="submit" id="btn" class="row">Add row</button>
        </div>
    </div>
</section>
<script>

//    javascript for creating the more dynamic row buttons

    let table = document.querySelector('.selects');
    let row = document.querySelector('.row');
    let datatype =['int','varchar(255)','timestamp'];
    let showDatatype = ['Number','Text','Date time'];

    row.addEventListener("click",()=>{

        let newRow = document.createElement('input');
        let newSelect = document.createElement('select');

        newRow.name ='columnName[]';
        newRow.className ='';
        newSelect.id = 'selectDatatype'
        newSelect.className='data';
        newSelect.name ='datatype[]';

        table.append(newRow);
        table.append(newSelect);

        for (let i=0;i<datatype.length;i++){
            let newOption = document.createElement('option');
            newOption.value = datatype[i];
            newOption.text =showDatatype[i];
            newSelect.appendChild(newOption);
        }

    })
</script>


</body>
</html>