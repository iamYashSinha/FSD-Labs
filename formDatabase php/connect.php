<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $website = $_POST['website'];
      $comment = $_POST['comment'];
      $gender = $_POST['gender'];
        
      
      // Connecting to the Database
      // Database connection
      $conn = new mysqli('localhost','root','','test');
      if($conn->connect_error){
          echo "$conn->connect_error";
          die("Connection Failed : ". $conn->connect_error);
      } else {
          $stmt = $conn->prepare("insert into test(name, email, website, comment, gender) values(?, ?, ?, ?, ?)");
          $stmt->bind_param("sssss", $name, $email, $website, $comment, $gender);
          $execval = $stmt->execute();
          echo $execval;
          echo "Registration successfully...";
          $stmt->close();
          $conn->close();
      }
    }
  ?>
      

 