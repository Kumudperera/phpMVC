<?php

class User extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index() {
        $this->view->render('User');
    }

    function setData() {
        if(isset($_POST['submit'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $password = $_POST['password'];
        
            $this->model->getData($fname, $lname, $password);

        }
        else if (isset($_POST['show'])) {
            $this->view->users = $this->model->showData();

            $this->view->render('UserData');

        }
    }


}
?>