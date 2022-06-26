<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true){
  header('location: login.php');
  exit;
}

$insert = false;
$update = false;
$delete = false;
// connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "notes";
$insert = false;

// create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// die if failed to connect the database
if(!$conn){
    die("Sorry, We are failed to connect the database. ". mysqli_connect_error()."<br>" );
}else {
    // echo "Successfully Connected to the Database"."<br>";
}

if(isset($_GET['delete'])){
    $sno = $_GET['delete'];
    $delete = true;
    $sql = "DELETE FROM `notes` WHERE `notes`.`sno` = $sno";
    $result = mysqli_query($conn, $sql);
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['snoEdit'])){
        //data updation
        $sno = $_POST['snoEdit'];
        $title = $_POST['titleEdit'];
        $description = $_POST['descriptionEdit'];
    
        // query for inserting data to the database 
            $sql = "UPDATE `notes` SET `title` = '$title', `description` = '$description' WHERE `notes`.`sno` = '$sno';";
    
            $result = mysqli_query($conn, $sql);
    
            if($result){
                $update = true; 
            }
            else{
                echo "Data was not successfully updated. The error is --> " . mysqli_error($conn); 
            }
    }
    else{
        // data insertion
        $title = $_POST['title'];
        $description = $_POST['description'];
    
        // query for inserting data to the database 
            $sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description');";
    
            $result = mysqli_query($conn, $sql);
    
            // Check for the data insertion success
            if($result){
                // echo "Data was successfully inserted.";
                $insert = true; 
            }
            else{
                echo "Data was not successfully inserted. The error is --> " . mysqli_error($conn); 
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
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

        <title><?php echo $_SESSION['username'];?></title>
    </head>

    <body>
       
        <!-- Modal -->
        <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit this Note</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/loginsystem/index.php" method="POST">
                            <input type="hidden" name="snoEdit" id="snoEdit">
                            <div class="mb-3">
                                <label for="title" class="form-label">Note Title</label>
                                <input name="titleEdit" type="text" class="form-control" id="titleEdit" aria-describedby="emailHelp">

                            </div>
                            <div class="mb-4">
                                <label for="desc" class="form-label">Note Description</label>
                                <textarea name="descriptionEdit" class="form-control" name="" id="descriptionEdit" cols="30" rows="3"></textarea>
                            </div>

                            <div class="">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php
        require 'partials/_nav.php';
      ?>

        <?php
            if($insert){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your note has been inserted successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        ?>
            <?php
            if($update){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your note has been updated successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        ?>
                <?php
            if($delete){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your note has been deleted successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        ?>

                    <div class="container mt-5">
                        <h3 class="display-4">Add a Note <?php echo $_SESSION['username'];?></h3>
                        <form action="/loginsystem/index.php" method="POST">
                            <div class="mb-3">
                                <label for="title" class="form-label">Note Title</label>
                                <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="desc" class="form-label">Note Description</label>
                                <textarea name="description" class="form-control" name="" id="desc" cols="30" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Note</button>
                        </form>
                    </div>


                    <div class="container my-5">
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">S.No</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // data fetching/ selecting query
                                $sql = "SELECT * FROM `notes`";
                                $result = mysqli_query($conn, $sql);
                                $num = 1;
                                    // fetching individual data
                                    while($row = mysqli_fetch_assoc($result)){
                                        
                                        echo "<tr>
                                        <th scope='row'>".$num."</th>
                                        <td>".$row['title']."</td>
                                        <td>".$row['description']."</td>
                                        <td>
                                            <button class='edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button>

                                            <button class='delete btn btn-sm btn-primary' id=d".$row['sno'].">Delete</button>
                                            </td>
                                        </tr>";  
                                        
                                        $num++;
                                    }  
                            ?>

                            </tbody>
                        </table>
                    </div>


                    <!-- Optional JavaScript; choose one of the two! -->

                    <!-- Option 1: Bootstrap Bundle with Popper -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

                    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

                    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

                    <script>
                        $(document).ready(function() {

                            $('#myTable').DataTable();

                        });
                    </script>

                    <script>
                        // update script 
                        edits = document.getElementsByClassName('edit');
                        Array.from(edits).forEach((element) => {
                            element.addEventListener("click", (e) => {
                                console.log("edit");
                                tr = e.target.parentNode.parentNode;
                                title = tr.getElementsByTagName("td")[0].innerText;
                                description = tr.getElementsByTagName("td")[1].innerText;

                                var myModal = new bootstrap.Modal(document.getElementById('editModal'), {
                                    keyboard: false
                                })

                                console.log(title, description);
                                titleEdit.value = title;
                                descriptionEdit.value = description;
                                snoEdit.value = e.target.id;
                                console.log(e.target.id);
                                myModal.toggle();
                            })
                        });

                        // delete script 
                        deletes = document.getElementsByClassName('delete');
                        Array.from(deletes).forEach((element) => {
                            element.addEventListener("click", (e) => {
                                sno = e.target.id.substr(1, );
                                console.log(sno);

                                if (confirm("Are you sure you want to delete it?")) {
                                    console.log("Yes");

                                    // its not a good practice
                                    window.location = `/loginsystem/index.php?delete=${sno}`;
                                    // Todo: Crate a form and submit it with a post request
                                } else {
                                    console.log("NO");
                                }



                            })
                        });
                    </script>

                    <!-- Option 2: Separate Popper and Bootstrap JS -->
                    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
    </body>

    </html>