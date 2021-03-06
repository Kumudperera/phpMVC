<?php

class App {

    private $_url = null;
    private $_controller = null;

    function __construct()
    {
        $this->_getURL();

        if(empty($this->_url[0])) {
            $this->_loadDefaultController();
            return false;
        }

        if($this->_loadController()) {
            $this->_loadControllerMethod();
        }
    }


    private function _getURL() {
        $url = isset($_GET["url"]) ? $_GET["url"] : null;

        $url = rtrim($url, '/');

        $url = filter_var($url, FILTER_SANITIZE_URL); //ex: $_url = controller/home/...

        $this->_url = explode('/', $url); //Split from '/' this and put url words in array. now $_url = [0=>controller, 1=> home,....]
    
        // print_r($this->_url);
    }

    private function _loadDefaultController() {
        require 'controllers/Index_Controller.php';

        $this->_controller = new Index();

        $this->_controller->index();
    }

    private function _loadController() {
        $file = 'controllers/'. $this->_url[0] . '_Controller.php';

        if(file_exists($file)) {
            require $file;

            $this->_controller = new $this->_url[0];
            $this->_controller->loadModel($this->_url[0]);
            return true;
        }
        else {
            echo "Sorry, Page not found";    
            return false;
        }
    }

    private function _loadControllerMethod() {
        $urlLength = count($this->_url);

        if($urlLength > 1) {
            if (!method_exists($this->_controller, $this->_url[1])){
                echo "Request method not found!!";
                exit;
            }
        }

        switch($urlLength) {
            case 6:
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4], $this->_url[5]);
            case 5:
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4]);
            case 4:
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3]);
            case 3:
                $this->_controller->{$this->_url[1]}($this->_url[2]);
            case 2:
                $this->_controller->{$this->_url[1]}();
            default:
                $this->_controller->index();

        }
    }
}

?>