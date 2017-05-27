<?php 
	if(isset($_POST['password'])){
		$password=$_POST['password'];
		$password_confirm=$_POST['password_confirm'];
	if($password != $password_confirm){
		header('Location:admin.php?page=change_password&password=notmatching');
		// prepare password update SQL
		}
		else{
		$username=$_SESSION['username'];
		$sql="UPDATE login SET password='$password' WHERE username='$username'";
		mysqli_query($connection,$sql);
		header('Location:admin.php?page=change_password&password=changed');
		}
	}
 ?>
<h1>Change Password</h1>
<?php 
	if (isset($_GET['password']) && $_GET['password']=='notmatching'): ?>
			<div class="alert alert-danger">
			 Password not matched.
			</div>
			<?php endif; ?>
<?php
	if (isset($_GET['password']) && $_GET['password']=='changed'): ?>
			<div class="alert alert-success">
			 Password changed.
			</div>
			 <?php endif; ?>
<form action="" method="post">
<div class="form-group">
	<label>New Password</label>
	<input type="password" class="form-control" name="password" placeholder="Enter new password">
</div>
<div class="form-group">
	<label>Confirm Password</label>
	<input type="password" class="form-control" name="password_confirm" placeholder="Confirm password">
</div>
<div class="form-group">
    <button type="Submit" class="btn btn-success">Change Password</button>	
</div>
</form>