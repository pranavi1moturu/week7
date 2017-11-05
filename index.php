<?php
$dsn      = 'mysql:dbname=pm487;host=sql2.njit.edu';
$user     = 'pm487';
$password = 'kKmilXOt';
try
 {
    echo '<table border= "3">';
    $dbh = new PDO($dsn, $user, $password);
    echo 'Connected successfully <br>';
    
    $link = mysql_connect("sql2.njit.edu", "pm487", "kKmilXOt");
mysql_select_db("pm487", $link);
$result = mysql_query("SELECT * FROM accounts where id<6", $link);
$num_rows = mysql_num_rows($result);
echo "number of records is $num_rows \n";
$sql = "SELECT * FROM accounts WHERE id < 6" ;
    echo "<tr> 
          <th>ID</th> 
          <th>EMAIL</th> 
          <th>FIRSTNAME</th> 
          <th>LASTNAME</th> 
          <th>PHONE </th> 
          <th>BIRTHDAY</th> 
          <th>GENDER</th> 
          <th>PASSWORD</th> 
          </tr>";
    foreach ($dbh->query($sql) as $row)
     {
        echo "<tr>";
        echo ' <td >'. $row[id] .' </td> 
               <td>'.$row[email].' </td> 
               <td>'.$row[fname].' </td> 
               <td>'.$row[lname].' </td> 
               <td>'.$row[phone].' </td> 
               <td>'.$row[birthday].'</td> 
               <td>'.$row[gender].' </td> 
               <td>'.$row[password].'</td>';
        echo "</tr>";
    }
}
catch (PDOException $e)
 {
    echo "Error: " . $e->getMessage();
}
//$dbh = null;
echo "</table>";
?>  

