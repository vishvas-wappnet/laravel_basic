
<?php

echo "-----------------------------------------------database connection program-----------------------------------------------" ."<br>" ; 



                                   
    $reg_username = 'anon_1277';
   $reg_user_email='anon@hacker.com';
   $reg_user_password='youarehacked';                                     
                                                                                                
   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "laravel";

   // Create connection
   $conn =  mysqli_connect($servername, $username, $password ,$database);

    // Check connection
   if (!$conn) 
       {
            die("Connection failed: " . mysqli_connect_error());
       }
    else
        {
            echo " Database Connected successfully" . "<br>";
        }                 

                                     
   $sql1 = 'INSERT INTO users VALUES (null ,"an11277", "anon1277@hacker.com", "hackme1")' ;
  
     
   
   if( mysqli_query($conn, $sql1) )

  // if(mysqli_error($conn))
   {
     //  echo mysqli_error($conn);
     print "sucess";
   }

                 
   else 
       {
         echo " erroruser registered succefully " ;
       }

             $conn->close();
        ?>






