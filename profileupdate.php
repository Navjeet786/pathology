<?php
 
 session_start();
 include "register.php";
 if(isset($_POST['edit']))
 {
    $id=$_SESSION['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $select= "select * from users where id='$id'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['id'];
    if($res === $id)
    {
   
       $update = "update users set fname='$fname',lname='$lname',email='$email' where id='$id'";
       $sql2=mysqli_query($conn,$update);
if($sql2)
       { 
           /*Successful*/
           header('location:index.php');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:Profile_edit_form.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:Profile_edit_form.php');
    }
 }
?>