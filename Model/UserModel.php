<?php

class data{
    public $connection;
    public function __construct()
    {
        try{
            $this->connection = new PDO('mysql:host=localhost',
                'admin',
                'welcome');
//                 echo "welcome";
        }
        catch (exception $e){;
            die("NO CONNECTION".$e->getMessage());
        }
    }
}

class model extends data{

    public function create_database($name){
        try {
            $this->connection->query("CREATE DATABASE $name");
            header("location:/");
        }

        catch (exception $e){
            die($e->getMessage());
        }
    }

//    fetching and showing the database in the frontend
    public function showDatabase(){
        return $this->connection->query("SHOW DATABASES")->fetchAll(PDO::FETCH_OBJ);

    }
//    queries for creating table
    public function createTable($databaseName,$tableName){
        $this->connection->query("
        USE $databaseName;
        CREATE TABLE $tableName (
        id int auto_increment,
        primary key (id)
        )");
    }
//    altering the database table to add columns to it
    public function addColumn($databaseName,$table,$column,$datatype){
        $this->connection->query("
        USE $databaseName;
        ALTER TABLE $table ADD COLUMN $column $datatype;
        ");
    }

//    fetching tables names from the database
    public function getTables($fetchData){
        return $this->connection->query("
        SELECT TABLE_NAME AS tablesNameList 
        FROM INFORMATION_SCHEMA.TABLES 
        WHERE TABLE_SCHEMA = '$fetchData'
        ")->fetchAll(PDO::FETCH_OBJ);
    }


}