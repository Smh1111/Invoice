
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    
    
  </head>
<body>
    
    <form class= "container" action="" method="POST">
        <h1>Sign up form</h1>

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control mb-2" placeholder="Enter your name">    
        </div>
    
        <div class="form-group">
            <label>Email address</label>
            <input type="email" name="email" class="form-control mb-2" aria-describedby="emailHelp" placeholder="Enter email">
            
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control mb-2" placeholder="Password">
        </div>
        
            <button type="submit" name="submit" class="btn btn-md btn-primary">Submit</button>
    </form>
</body>
</html>

<?php
    include "database.php";
    if(isset($_POST['submit']))
        {
            $name = $_POST['name'];

            $email = $_POST['email'];

            $password = $_POST['password'];
        
    $sql = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$password')";
    
    $statement = $conn->query($sql);

    if ($statement == TRUE) {

        echo "New record created successfully.";
  
      }else{
  
        echo "Error:". $sql . "<br>". $conn->error;
  
      } 
  
    echo $conn->lastInsertId();
    
        }

?>