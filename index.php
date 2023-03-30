<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>My Page</title>
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="//sqltools/connections/FirstMySQLConnection/tranquillero_jenamel/table/student">
   <link rel="stylesheet" href="/create.php">
   <link rel="stylesheet" href="mysql/localhost/read_db/jenamel">
   <link rel="stylesheet" href="./read.php">
   <link rel="stylesheet" href="./edit.php">
   <link rel="stylesheet" href="./delete.php">

</head>

<body>
   <div class="container my-5">
      <h2>List of Students</h2>
      <a class="btn btn-primary" href=" /tranquillero_jenamel/create.php" role="button">New Client</a>
      <br>
      <table class="table">
         <thead>
            <tr>
               <th scope = "col">ID</th>
               <th scope = "col">Email</th>
               <th scope = "col">Name</th>
               <th scope = "col">Message</th>
               <th scope = "col">Action</th>
            </tr>
         </thead>
         <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "usa_tranquillero.sql";

            // Create connection
            $connection = new mysqli($servername, $username, $password, $database);

            // Check connection
            if ($connection->connect_error) {
               die("Connection failed: " . $connection->connect_error);
            }

            // read all row from database table
            $sql = "SELECT * FROM usa_tranquillero";
            $result = $connection->query($sql);

            if (!$result) {
               die("Invalid query: " . $connection->error);
            }
            

            // read data of each row
            foreach ($result->fetch_all() as $key => $value) : ?>
               <tr>
                  <td><?= $value['0'] ?></td>
                  <td><?= $value['1'] ?></td>
                  <td><?= $value['2'] ?></td>
                  <td><?= $value['3'] ?></td>
                  <td>
                  <td>
                        <form action="edit.php" method="post">
                           <input type="hidden" name="id" value="<?php echo $rows['id']?>">
                           <input type="submit" name="delete" class="btn btn-outline-danger btn-sm" value="EDIT">
                        </form>
                        <form action="delete.php" method="post">
                           <input type="hidden" name="id" value="<?php echo $rows['id']?>">
                           <input type="submit" name="delete" class="btn btn-outline-danger btn-sm" value="DELETE">
                        </form>
                  </td>
               </tr>
            <?php endforeach ?>
         </tbody>
      </table>
   </div>
   <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>
