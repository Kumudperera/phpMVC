<?php

class View {
    function __construct(){

    }
    public function render($viewName) {
        require 'views/' .$viewName. '_View.php';
    }
}

?>