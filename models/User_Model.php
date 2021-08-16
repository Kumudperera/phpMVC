<?php

class User_Model extends Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function getData($fname, $lname, $password) {
        $query = "INSERT INTO users(first_name, last_name, password) values('$fname', '$lname', '$password')";
        echo "Data is entered";
        return $this->db->insertQuery($query);
    }

    function showData() {
        $query = "SELECT * from users";
        return $this->db->searchQuery($query);
    }

}
?>