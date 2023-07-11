<?php

require 'Model/UserModel.php';

class controller{
    public $model;
    public $tableList;
    public function __construct()
    {
        $this->model = new model();
    }

    public function index(){
        require 'views/home.php';
    }

//creating database
    public function createDB($DbName){
//        var_dump($DbName);
        if ($DbName){
            $this->model->create_database($DbName);
        }
        else{
            require "views/createDb.php";
        }
    }


//    create table for the created database
    public function createTable($databaseList){
         if ($databaseList){
             $databaseName = $databaseList['selectDatabase'];
             $tableName = $databaseList['tableName'];
             $count = count($databaseList['columnName']);
             $this->model->createTable($databaseName,$tableName);
             for ($i=0;$i<$count;$i++){
                 $this->model->addColumn($databaseName,$tableName,$databaseList['columnName'][$i],$databaseList['datatype'][$i]);
             }
             header("location: /");
         }
         else{
             $db = $this->model->showDatabase();
             require 'views/createTable.php';
         }
    }

//    creating column for the created table
    public function createColumn($data){
        if($data['selectDatabase']){
            $this->tableList = $this->model->getTables($data['selectDatabase']);
            $dbList = $this->model->showDatabase();
            require 'views/createColumn.php';
        }
        else{
            $tables = $this->tableList;
            $dbList = $this->model->showDatabase();
            require 'views/createColumn.php';
        }
    }

}