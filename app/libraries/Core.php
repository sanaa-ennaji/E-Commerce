
<?php

 class Core{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();

        if (isset($url[0])) {
            if (file_exists('../app/controllers/' . $url[0] . '.php')) {
                // If Exist Set As Controller
                $this->currentController = ucwords($url[0]);
                // unset 0 Index 
                unset($url[0]);
            }
<<<<<<< HEAD

=======
            
>>>>>>> 5f9522db7d1fbe71af99aa4e1b8d670477c4752c
        }
        // Require Controller
        require '../app/controllers/'. $this->currentController.'.php';

        //Instantiate controller class
        $this->currentController = new $this->currentController;

        if (isset($url[1])) {
            if(method_exists($this->currentController, $url[1])){
                $this->currentMethod = $url[1];
            }
            unset($url[1]);
        }

        $this->params = $url ? array_values($url): [];

        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }

 }

?> 
