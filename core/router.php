<?php

class router {
    public $router = [];
    public $controller;
    public function __construct()
    {
        $this->controller = new controller();
    }



    public function get($uri,$action){
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET',
        ];
        return $this;
    }

    public function post($uri,$action){
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST',
        ];
        return $this;
    }

    public function routers(){

        foreach ($this->router as $key) {
            if($key['uri'] === $_SERVER['REQUEST_URI']){
                if($key['action']){
                    switch ($key['action']){
                        case 'createDB':
                            $this->controller->createDB($_POST["databaseName"]);
                            break;
                        case 'createTable':
                            $this->controller->createTable($_POST);
                            break;
                        case 'createColumn':
                            $this->controller->createColumn($_POST);
                            break;

                        default :
                            $this->controller->index();
                    }
                }else{
                    $this->controller->index();
                }

            }
        }
        exit();
    }
}