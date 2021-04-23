<?php
require_once('store.php');

$mystore->login();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>My Store Log In</title>
</head>
<body>
<center>
    <div class="container mt-5">
        <div class="form-container "><br>
        <div class="row">
        <div class="col-md-6">
            <h2>Log In</h2>
            <form action="" method="POST">
                <div class="form-input">
                    <label for="">Username</label>
                    <input type="text" name="username" id="username">
                </div><br>
                <div class="form-input">
                    <label for="">Password</label>
                    <input type="text" name="password" id="password">
                </div><br>
                <button type="submit" class="btn btn-outline-danger" name="submit">Login</button>
             
            </form>
            </div>
            </div>
        </div>
    </div>
</center>
</body>
</html>