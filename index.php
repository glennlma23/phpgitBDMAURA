<!DOCTYPE html>
 <html>
 <head>
  <title>PHP Starter Application</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="style.css" />
 </head>
 <body>
  <h1 style="text-align:center;">Personas</h1>
  <table>
   <?php
  $servername = "us-cdbr-iron-east-03.cleardb.net";
  $username = "b3da777131d6df";
  $password = "cbff8bdb";
  $dbname = "ad_de78fa76b25c9b4";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * from personas";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {?>
      <tr>
      <td><?php echo $row['codigo']?></td>
      <td><?php echo $row['nombre']?></td>
      <td><?php echo $row['edad']?></td>
      </tr>
     <?php }
 } else {
      echo "0 results";
  }
  $conn->close();
 ?> 
 </table>
 </body>
 </html>
