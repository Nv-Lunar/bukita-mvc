<?php 

class App {
   protected $controller = 'Home';
   protected $method = 'index';
   protected $params = [];
     public function __construct(){
        $url = $this->parseURL();
        

        //controller

        if(!empty($url) and file_exists('../app/controllers/' . $url[0] . '.php')){
         $this->controller = $url[0];
         unset($url[0]); //url(0) beratri url controller  di unset(tdk ditampilkan)
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;
        
        //method

        if(isset($url[1])){
         if(method_exists($this->controller, $url[1])){ //jika controller ada 
            $this->method = $url[1]; //method = $url[1]
            unset($url[1]);//url(0) beratri url method dan di unset(tdk ditampilkan)
         }
        }

        //params(parameter)
        if(!empty($url)){
         $this->params = array_values($url);
         
         //url beratri semua url karena url(0 dan 1) di unset
         //yang ditampilkan adalah url(>=2 atau >1) dan disebut parameter 
         //jika lebih dari 1 disebut params(belajar b inggris)    
        }
        

        //jalankan controller dan method serta kirmkan params jika ada
        call_user_func_array([$this->controller, $this->method],$this->params);

        

     }

     public function parseURL(){
      if(isset($_GET['url'])){
         $url = rtrim($_GET['url'], '/');
         $url = filter_var($url, FILTER_SANITIZE_URL);
         $url = explode("/", $url);
         return $url;
      }
     }
}