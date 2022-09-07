

<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phoneCode = $_POST['phoneCode'];
        $phone = $_POST['phone'];
  
      
    
    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "form";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{ 
      $stmt = $conn->prepare("insert into registration(username, password, gender, email, phoneCode, phone) values(?, ?, ?, ?, ?)");
      $stmt->bind_param("sssss", $username ,$password, $gender, $email, $phoneCode, $phone);
      $execval = $stmt->execute();
      echo $execval;
      echo "Registration successfully...";
      $stmt->close();
      $conn->close();

    }

  }

?>