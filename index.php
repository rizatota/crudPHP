<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    <div class="container " style="margin-top:100px">
        <a href='addNew.php' class='text-light btn btn-primary mx-10'>Add new </a>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col"> Email</th>
            <th scope="col"> Gender</th>
            <th scope="col"> Action</th>
            </tr>
        </thead>
            <tbody>
                <?php
                    include('connection.php');
                    $getData = "SELECT * FROM crud";
                    $getData_result = mysqli_query($conn,$getData);
                    

                    while($result = mysqli_fetch_assoc($getData_result)){ 
                ?>  

                <tr>
                    <td><?php echo" $result[firstName]"?></td>
                    <td><?php echo" $result[lastName]"?></td>
                    <td><?php echo" $result[email]"?></td>
                    <td><?php echo" $result[gender]"?></td>
                    <td> 
                            <a href='edit.php?id=<?php echo "$result[id]"?>' class='text-light btn btn-primary'>Edit</a>
                            <a href='delete.php?id=<?php echo "$result[id]"?>' class='text-light btn btn-danger'>Delete</a>
                    </td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>