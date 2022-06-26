<?php
    $showAlart = false;
    $showError = false;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        include 'partials/_dbconnect.php';
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        // check whether this username is exist
        $existsql = "SELECT * FROM `users` WHERE `username` = '$username'";
        $result = mysqli_query($conn, $existsql);
        $numExistRow = mysqli_num_rows($result);
        if($numExistRow>0){
            $showError = "Username already exists";
        }
        else{        

            if($password == $cpassword){
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users` (`username`, `password`) VALUES ('$username', '$hash');";
                $result = mysqli_query($conn, $sql);
                if($result){
                    $showAlart = true;
                }
            }
            else{
                $showError = "Psswords do not match";
            }
        }
    }
?>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <title>SignUp</title>
    </head>

    <body>
        <?php
        require 'partials/_nav.php';
      ?>
            <?php
        if($showAlart){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your account is now created and you can now login.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
      
      ?>
                <?php
        if($showError){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> '.$showError.'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
      
      ?>
                    <div class="container mt-5">
                        <h1 class="display-4 text-center">SignUp to our website</h1>

                        <form action="/loginsystem/signup.php" method="POST" class="mt-4">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input maxlength="20" name="username" type="text" class="form-control" id="username" aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input maxlength="30" name="password" type="password" class="form-control" id="password">
                            </div>
                            <div class="mb-3">
                                <label for="cpassword" class="form-label">Confirm Password</label>
                                <input name="cpassword" type="password" class="form-control" id="cpassword">
                            </div>

                            <button type="submit" class="btn btn-primary">SignUp</button>
                        </form>
                    </div>

                    <!-- Optional JavaScript; choose one of the two! -->

                    <!-- Option 1: Bootstrap Bundle with Popper -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

                    <!-- Option 2: Separate Popper and Bootstrap JS -->
                    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
    </body>

    </html>