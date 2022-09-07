<?php
 include_once 'connect.inc.php';
?>

<!DOCTYPE html>  
<html>  
<head>  
<style>  
.error {color: #FF0001;}  
</style>  
</head> 

<style>
    .form{
        display: flex;
        justify-content: center;
    }
    #h2{
        text-align: center;
    }

    h4{
        text-align: center;
    }
</style>

<body>    

<?php  
// define variables to empty values  
$nameErr = $emailErr = $mobilenoErr = $genderErr = $websiteErr = $agreeErr = "";  
$name = $email = $mobileno = $gender = $website = $agree = "";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST["name"])) {  
         $nameErr = "Name is required";  
    } else {  
        $name = input_data($_POST["name"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
    }  
      
    //Email Validation   
    if (empty($_POST["email"])) {  
            $emailErr = "Email is required";  
    } else {  
            $email = input_data($_POST["email"]);  
            // check that the e-mail address is well-formed  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
     }  
    
    //Number Validation  
    if (empty($_POST["mobileno"])) {  
            $mobilenoErr = "Mobile no is required";  
    } else {  
            $mobileno = input_data($_POST["mobileno"]);  
            // check if mobile no is well-formed  
            if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
            $mobilenoErr = "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be less and greator than 10  
        if (strlen ($mobileno) != 10) {  
            $mobilenoErr = "Mobile no must contain 10 digits.";  
            }  
    }  
      
    //URL Validation      
    if (empty($_POST["website"])) {  
        $website = "";  
    } else {  
            $website = input_data($_POST["website"]);  
            // check if URL address syntax is valid  
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {  
                $websiteErr = "Invalid URL";  
            }      
    }  
      
    //Empty Field Validation  
    if (empty($_POST["gender"])) {  
            $genderErr = "Gender is required";  
    } else {  
            $gender = input_data($_POST["gender"]);  
    }  
  
    //Checkbox Validation  
    if (!isset($_POST['agree'])){  
            $agreeErr = "Accept terms of services before submit.";  
    } else {  
            $agree = input_data($_POST["agree"]);  
    }  
}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>  

<h2 id="h2">Macintosh Corporation Form</h2> 
<h4>Apply here!</h4>  
<br>
<div class="form">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >    
        Name:   
        <input type="text" name="name">  
        <span class="error">* <?php echo $nameErr; ?> </span>  
        <br><br>  
        E-mail:   
        <input type="text" name="email">  
        <span class="error">* <?php echo $emailErr; ?> </span>  
        <br><br>  
        Mobile No:   
        <input type="text" name="mobileno">  
        <span class="error">* <?php echo $mobilenoErr; ?> </span>  
        <br><br>  
        Resume Link:   
        <input type="text" name="website">  
        <span class="error"><?php echo $websiteErr; ?> </span>  
        <br><br>  
        Gender:  
        <input type="radio" name="gender" value="male"> Male  
        <input type="radio" name="gender" value="female"> Female  
        <input type="radio" name="gender" value="other"> Other  
        <span class="error">* <?php echo $genderErr; ?> </span>  
        <br><br>  
        Agree to Terms of Service:  
        <input type="checkbox" name="agree">  
        <span class="error">* <?php echo $agreeErr; ?> </span> 
        <p><a href="https://www.youtube.com/watch?v=2B-XwPjn9YY&ab_channel=macessentials" target="_blank">Read Me</a></p> 
        <br>                        
        <input type="submit" name="submit" value="Submit">   
        <br><br>                             
    </form>  
</div>
  
<?php  
    if(isset($_POST['submit'])) {  
    if($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $genderErr == "" && $websiteErr == "" && $agreeErr == "") {  
        echo "<h3 color = #FF0001> <b>Your registration was successful. All the Best!</b> </h3>";  
        echo "<h2>Your Input:</h2>";  
        echo "Name: " .$name;  
        echo "<br>";  
        echo "Email: " .$email;  
        echo "<br>";  
        echo "Mobile No: " .$mobileno;  
        echo "<br>";  
        echo "Website: " .$website;  
        echo "<br>";  
        echo "Gender: " .$gender;  
    } else {  
        echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
    }  
    }  
?>  
  
</body>  
</html>  