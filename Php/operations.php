<?php  
   $a = 100;
   $b = 20;
   
   $c = $a + $b;
   echo "Addtion Operation Result: $c <br/>\n";     //addition
   
   $c = $a - $b;
   echo "Substraction Operation Result: $c <br/>\n";        //subtraction
   
   $c = $a * $b;
   echo "Multiplication Operation Result: $c <br/>\n";   //multiplication
      
   
   $c = $a / $b;
   echo "Division Operation Result: $c <br/>\n";        //Division
   
   $c = $a % $b;
   echo "Modulus Operation Result: $c <br/>\n";     //modulus
   
   $c = $a++; 
   echo "Increment Operation Result: $c <br/>\n";       //increment
   
   $c = $a--; 
   echo "Decrement Operation Result: $c <br/>\n";       //decrement


    //for loop
    for ($x = 0; $x <= 100; $x+=10) 
    {
        echo "The number is: $x <br>\n";
    }

    //if... else loop
    $k = date("D");
        if($k == "Sun")
        {
            echo "Have a nice weekend!\n";
        } 
        else
        {
            echo "Have a nice day!\n";
        }

    // functions
    function familyName($fname, $year) 
    {
        echo "$fname Refsnes. Born in $year <br>\n";
    }
      
      familyName("Hege", "1975");
      familyName("Stale", "1978");
      familyName("Kai Jim", "1983");


    ?>