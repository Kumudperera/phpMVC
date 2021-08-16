<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table {
            border: solid 2px;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
        }
    </style>
    <title>Search</title>
</head>
<body>
    <h2>SEARCH USER</h2>
    <form action="<?php echo URL?>search/searchData" method="POST">
        <label for="school">Enter Your First Name</label>
            <input type="text" name="searchId">
        <button name="search">SEARCH</button>
    </form>

    <form action="<?php echo URL?>User/showTable">

    </form>
</body>
</html>