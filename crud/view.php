<?php 

include_once "database.php";

$sql = "SELECT * FROM users";

$statement = $conn->prepare($sql);
$statement->execute();
//$result = $statement->fetchAll();

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

    <div class="container">

        <h2>Display users</h2>

<table class="table">

    <thead>

        <tr>

            <th>ID</th>

            <th>Name</th>

            <th>Email</th>

            <th>Password</th>

            </tr>

    </thead>

    <tbody> 

    <?php while($row = $statement->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['id']); ?></td>
       <td><?php echo htmlspecialchars($row['name']); ?></td>
       <td><?php echo htmlspecialchars($row['email']); ?></td>
       <td><?php echo htmlspecialchars($row['password']); ?></td>
       <td>
        <a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;
       <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
    </td>
     </tr>
     <?php endwhile; ?>           

    </tbody>

</table>

    </div> 

</body>
</html>