<?php

 include "dbpatient.php";

   $a =$_POST['name'];
   $b =$_POST['email'];
   $c =$_POST['phone'];
   $d =$_POST['address'];
   $e =$_POST['city'];
   $f =$_POST['gender'];
   $g =$_POST['password'];

 $h = "insert into reports(name,email,phone,address,city,gender,password)value('$a','$b','$c','$d','$e','$f','$g')";
 mysqli_query($con,$h);

 ?>