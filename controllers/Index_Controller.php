<?php

class Index extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index() {
        echo "I'm the controller index";
    }
}

?>