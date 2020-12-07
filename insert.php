<?php
include 'crud.php';
if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `curdtable`(`username`, `password`) VALUES ('$username' , '$password')";
    $result = mysqli_query($conn , $sql);

    if($result){
        echo "inserted successfully";
    }
    else{
        echo "error ".mysqli_error($conn);
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>insertion</title>
  </head>
  <body>
    <div class="col-lg-6 m-auto">

        <form action="" method="post">
            <br><br>
            <div class="card">
                <div class="card-header bg-dark">
                   
                    <h1 class="text-white text-center">Insert Operation</h1>
                </div>
                <br>
                <label for="name">Username</label>
                <input type="text" name="username" id="username" class="form-control"> <br>
                <label for="pass">Password</label>
                <input type="text" name="password" id="password" class="form-control"> <br>

                <button class="btn btn-success" type="submit" name="submit">Submit</button>
                <br>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>