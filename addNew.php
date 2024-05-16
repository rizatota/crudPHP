<?php
  include('connection.php');
if(isset($_POST['add'])){
  
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $add = "INSERT INTO crud (firstName,lastName,email,gender)
                    VALUES('$fname','$lname','$email','$gender')";
    $addResult = mysqli_query($conn,$add);
    header("Location:index.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddNew</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <div class="container d-flex w-100  " style="max-width:500px;">

    <form method="post" class="w-100">
       
            <div class="  mb-3">
                <label for="exampleInputEmail1" class="form-label">First Name:</label>
                <input type="text" class="form-control" name="firstName"  aria-describedby="emailHelp" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Last Name:</label>
                <input type="text" class="form-control" name="lastName"  aria-describedby="emailHelp" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email"  aria-describedby="emailHelp" >
            </div>
            
            <div class="form-check">
                <label class="form-label" ><strong>Gender </strong></label><br> 

                <input class="form-check-input" type="radio" name="gender" value="male" >
                <label >Male</label><br>
                <input class="form-check-input" type="radio" name="gender" value="female">
                <label >Female</label>
            </div>

         


            <button type="submit" class="btn btn-primary" name="add">Submit</button>
            <a href="index.php" class="btn btn-danger">Cancel</a>
     
</form> 
   
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>