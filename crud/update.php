<?php
    include "database.php";
    if(isset($_POST['update']))
        {
            $update_user_id = $_POST['update_user_id'];

            $name = $_POST['name'];

            $email = $_POST['email'];

            $password = $_POST['password'];

            
        
    $sql = "UPDATE users SET name = '$name', email = '$email', password = '$password' WHERE id= '$update_user_id'";
    
    $statement = $conn->query($sql);

    if ($statement == TRUE) {

        echo "Record Updated successfully.";
  
      }else{
  
        echo "Error:". $sql . "<br>". $conn->error;
  
      } 
  
    
    
        }

    if (isset($_GET['id'])) {

            $user_id = $_GET['id']; 
        
            $sql = "SELECT * FROM `users` WHERE `id`='$user_id'";

            $statement = $conn->query($sql);
            
            $count = $statement->rowCount();
            print_r($count);
            if ($count > 0) 
            {        
        
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

                    $id = $row['id'];
                    
        
        
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    
  </head>
<body>
    
    <form class= "container" action="" method="post">
        <h2>Update form</h2>

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control mb-2">    
        </div>
        <input type="hidden" name="update_user_id" value="<?php echo $id; ?>">
        <div class="form-group">
            <label>Email address</label>
            <input type="email" name="email" class="form-control mb-2">
            
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control mb-2">
        </div>
        
            <button type="submit" name="update" class="btn btn-md btn-primary">Update</button>
    </form>
</body>
</html>

