<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Display</title>
  </head>
  <body>
      <div class="container">
          <div class="col-lg-12">
          <br><br>
              <h1 class="text-center text-success" >Display table data</h1>
              <br>
              <table class="table table-striped table-hover table-bordered" >
                  <tr>
                      <th>Id</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Delete</th>
                      <th>Update</th>
                  </tr>
            <?php
                         include "crud.php";
                        $q = "SELECT * FROM `crudtable`";
                        $result_1 = mysqli_query($conn,$q); //wrong how

                        // echo var_dump($resultS_1);
                        if($result_1){
                          echo "success_1"."<br>";
                        }
                        else{
                          echo "false";
                        }
                        while($row = mysqli_fetch_array($result_1)){

            ?>

                        <tr>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['username'];?></td>
                            <td><?php echo $row['password'];?></td>
                            <td> <button class="btn btn-danger" > <a href="Delete.php?id=<?php echo $row['id'];  ?>" class="text-white" >Delete</a> </button> </td>
                            <td> <td> <button class="btn btn-primary" > <a href="Update.php?id=<?php echo $row['id'];  ?>" class="text-white" >Update</a> </button> </td></td>
                        </tr>

             <?php
                } 
             ?>
              </table>
          </div>

      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>