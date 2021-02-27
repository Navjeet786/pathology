<?php include 'header.php'; ?>


	<br><br><br><br><br>
<section>

<div class="container">
    <div class="row">
        
    <div class="col-md-3"></div>
    <div class="col-md-6">


<div class="card shadow">
    <div class="card-body">
<h1>Welcome, Create Your Account</h1>
<br>
    <form method="post" action="insert.php">
      <div class="form-group">
        <label>PATIENT NAME:</label>
        <input type="text" name="name" class="form-control " placeholder="Enter Name">
       </div>

       <div class="form-group">
        <label>EMAIL:</label>
        <input type="text" name="email" class="form-control " placeholder="Enter E-mail">
       </div>

       <div class="form-group">
        <label>PHONE:</label>
        <input type="text" name="phone" class="form-control " placeholder="Contact number">
       </div>

       <div class="form-group">
        <label>ADDRESS:</label>
        <textarea col="" row="2" name="address" class="form-control"></textarea>
       </div>

       <div class="form-group">
       <label>CITY:</label>
		     <select name="city" class="form-control">
		     	<option>Select</option>
		     	<option>Gwalior</option>
		     	<option>Indore</option>
		     	<option>Bhopal</option>
		     	<option>Delhi</option>
		     </select>
		</div>
        <div class="form-group">
		<label>GENDER:</label>
		<input type="radio" name="gender">MALE
		<input type="radio" name="gender">FEMALE
        </div>


       <div class="form-group">
        <label>PASSWORD:</label>
        <input type="Password" name="password" class="form-control " placeholder="Enter password">
       </div>

        <center>
        <input type="submit" value="submit" class="btn btn-outline-danger"></input>
        </center>
        </form>
           <br>
        <h5>By clicking Register you agree to our T&C's</h5>
          <h5> Have An Account <a href="loginForuser.php" class="text-danger">Login</a></h5>
        
</div>
</div>

</div>
<div class="col-md-3"></div>
</div>
</div>

</section>

