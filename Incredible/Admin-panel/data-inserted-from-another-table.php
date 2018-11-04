<?php
  include("database/connection.php");

  $record1 = $dbh1->prepare( "SELECT * FROM `pdo`");
  $record1-> execute();
  $result1 = $record1->fetchAll();
  foreach( $result1 as $row1 ){
    $row = [
      'firstname' => $row1['firstname'],
      'lastname'  => $row1['lastname'],
      'username'  => $row1['username'],
      'email'     => $row1['email'],
      'pass'      => md5( $row1['firstname'] )
    ];

  $sql = "
    INSERT 
     INTO `Admin-panel`
      (`firstname`, `lastname`, `username`, `email`, `password`)
    VALUES 
    (:firstname , :lastname , :username , :email , :pass )";
        
  $statement = $dbh->prepare($sql);
  $status    = $statement->execute($row);

  }
    // echo "<pre>";
    //   print_r( $row1 );
    // echo "</pre>";

  die();
?>