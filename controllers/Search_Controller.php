<?php

class Search extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index() {
        $this->view->render('Search');
    }

    function searchData() {
        if (isset($_POST['search'])) {
            $id = $_POST['searchId'];

            $this->view->users = $this->model->searchData($id);

            $this->view->render('UserData');
        }
    }

}
?>