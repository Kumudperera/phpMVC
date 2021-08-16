<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }
        h2 {
            margin-bottom: 25px;
            margin-left: 150px;
        }
        .container {
            margin-left: 50px;
            width: 500px;
            clear: both;
        }

        .container input {
            width: 100%;
            clear: both;
        }
    </style>
    <title>Registration</title>
</head>
<body>
    <h2>USER REGISTRATION</h2>
    <div class="container">
    <form action="<?php echo URL?>User/setData" method="POST">
            <label for="fname">First Name</label>
            <input type="text" name="fname">

            <label for="lname">Last Name</label>
            <input type="text" name="lname">

            <label for="password">Password</label>
            <input type="password" name="password">
            <button class="btn sumbit" name="submit">SUBMIT</button>
            <button class="btn sumbit" name="show">SHOW</button>
    </form>
    </div>
    
</body>
</html>