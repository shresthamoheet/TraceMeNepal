<?php 
		$getregisterstatement="SELECT * FROM register";
		$getregisterquery=mysqli_query($connection, $getregisterstatement);

?>
<?php 
	$sql="SELECT * FROM register";
	$query=mysqli_query($connection,$sql);
	 if (isset($_GET['keyword'])){
	 	$keyword=$_GET['keyword'];
	 	$sql="SELECT * FROM register WHERE type LIKE '$keyword%'";
	 	$query=mysqli_query($connection,$sql);
	 }
	
 ?>
<h1 class="text right">Registered namelist</h1>
<p class="text right"> There are total <?php echo mysqli_num_rows($query); ?> registrations.</p>

<?php if (mysqli_num_rows($query)>0): ?>
	<div class="row">
	<?php if (isset($_GET['delete']) && $_GET['delete']=='success'): ?>
			<div class="alert alert-success">
			  	Successfully deleted!
			</div>
			 <?php endif; ?>
		<div class="col-lg-6"></div>
  		<div class="col-lg-6">
			<form action="" method="get">
	    		<div class="input-group">
	    				<input type="hidden" name="page" value="list_allrooms">
		      			<input type="text" class="form-control" name="keyword" placeholder="Search for...">
		      			<span class="input-group-btn">
		        			<button class="btn btn-primary" type="submit">Go!</button>
		      			</span>
	    		</div><!-- /input-group -->
			</form>
  		</div><!-- /.col-lg-6 -->
	<table class="table table-stripped">
		<thead>
			<tr>
				<th>SN</th>
				<th>Photo</th>
				<th>Chip Id</th>
				<th>Name</th>
				<th>Nationality</th>
				<th>Email</th>
				<th>Password</th>
				<th>Location</th>
				<!-- <th>Qrcode</th> -->
				<th>Contactname</th>
				<th>Contactnum</th>
				<th>Passportnum</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		<?php $count=1; ?>
		<?php $c=1000;

		 ?>
		<?php  while($row=mysqli_fetch_array($query)): ?>
			
			<tr id="row">
				<td><?php echo $count; ?></td>
				<td id="file_row"><img src="../img/<?php echo $row['file']; ?>"> </td>
				<td><?php echo $c; ?></td>
				<td id="name_row"><?php echo $row['name']; ?></td>
				<td id="nationality_row"><?php echo $row['nationality']; ?></td>
				<td id="email_row"><?php echo $row['email']; ?></td>
				<td id="password_row"><?php echo $row['password']; ?></td>
				<!-- <td id="qrcode_row"><img src="../img/<?php //echo $row['qrcode']; ?>"></td> -->
				<td id="location_row"><?php echo $row['Location']; ?></td>
				<td id="contactname_row"><?php echo $row['contactname']; ?></td>
				<td id="contactnum_row"><?php echo $row['contactnum']; ?></td>
				<td id="passportnum_row"><?php echo $row['passportnum']; ?></td>
				<td> 
				<a class="btn btn-sm btn-warning" href="admin.php?page=edit&id=<?php echo $row['id']; ?>"><i class="fa fa-pencil"></i></a>
				<a class="btn btn-sm btn-danger" href="process/delete.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></a>
				<a class="btn btn-sm btn-primary" href="process/print.php?id=<?php echo $row['id']; ?>"><i class="fa fa-print"></i></a>
				

				</td>
			</tr>
			<?php $count++; ?>
			<?php $c++; ?>
		<?php endwhile; ?>
		
		</tbody>
	</table>
<?php endif; ?>



