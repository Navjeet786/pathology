<?php include 'header.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/patient.css">
</head>

	<br><br><br><br><br><br>

<section>

<div class="container">
    <div class="row">
        
    <div class="col-md-3"></div>
    <div class="col-md-6">


<div class="card shadow">
    <div class="card-body">
<h1>Welcome, Sign In to Your Account</h1>
<br>
        <form method="post" action="logininsert.php">
            <div class="form-group">
            <label>Name:</label>
            <input type="text" name="username" class="form-control a" placeholder="enter username">
        </div>

        <div class="form-group">
            <label>Password:</label>
            <input type="Password" name="password" class="form-control a" placeholder="Enter password">
        </div>
        <center>
        <input type="submit" class="btn btn-outline-danger" value="submit"></input>
        </center>
        </form>
           <br>
        <h5>By clicking Log In you agree to our T&C's</h5>
        <h5>Don't Have An Account <a href="register.php" class="text-danger">Register Your account</a></h5>
</div>
</div>

</div>
<div class="col-md-3"></div>
</div>
</div>
</div>
<br><br><br><br>
</body>	