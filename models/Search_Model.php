<?php

class Search_Model extends Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function searchData($id) {
        $query = "SELECT * FROM users WHERE first_name='$id'";
        return $this->db->searchQuery($query);
    }
    
}
?>