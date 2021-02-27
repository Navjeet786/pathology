<?php

 include "dbpatient.php";

 $a =$_POST['username'];
 $b =$_POST['password'];

 $d = "insert into login(username,password)value('$a','$b')";
 mysqli_query($con,$d);

 ?>

