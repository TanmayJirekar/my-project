<?php

$con=mysqli_connect("localhost","root","","minipeojectITRmyproject")or die(mysqli_error($con))

if($con)
{
    echo"Dayabase connected";
}
else{
    echo"database not connect";
}


?>
<!--localhost,user,password,database name-->
