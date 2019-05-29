<?php
include('backend/login/login.php'); 
if(isset($_SESSION['login_user'])){
    header("location: backend/admin/dashboard_templ/template.php"); 
}
?> 

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="backend/login/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Admin login</title>  
</head>

<body>


<form class="container mt-5 mb-5 " action="" method="post">

<div class="login-wrap">
	<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Log In</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">

				<div class="sign-in-htm">
					<div class="group">
						<label for="user" class="label">Username</label>
						<input id="user" type="text" class="input" name="username">
					</div>

					<div class="group">
						<label for="pass" class="label">Password</label>
						<input id="pass" type="password" class="input" data-type="password" name="password">
					</div>
				
					<div class="group">
						<input type="submit" class="button" value="Sign In" name="submit">
					</div>
				</div>
		
		</div>
	</div>
</div>

</form>





  <!-- <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="username" placeholder="Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password" >
    </div>
 
  <div class="form-group container mt-4 ">  
    <button type="submit" class="btn btn-secondary btn-block " name="submit">Sign in</button>    
  </div>
</form>

 </div> -->


 <span class="align-center mt-5" style="color:red; font-size:17px"><?= $error; ?></span>

</body>
</html>