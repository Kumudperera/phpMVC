<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table {
            border: solid 2px;
            margin-left: 120px;
            margin-bottom: 25px;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
        }
    </style>
    <title>mvc</title>
</head>
<body>
    <h2>Welcome to phpMVC</h2>
    <?php

    $result = $this->users;
    if ($result){
        echo "<table><tr><th>first_name</th><th>last_name</th><th>password</th></tr>";
        for($i = 0; $i < count($result); $i++) {
            echo "<tr><td>".$result[$i]['first_name']."</td><td>".$result[$i]['last_name']."</td><td>".$result[$i]['password']."</td></tr>";
        }
        echo "</table>";
    }else {
        echo "0 results";
    }
    
    ?>
</body>
</html>