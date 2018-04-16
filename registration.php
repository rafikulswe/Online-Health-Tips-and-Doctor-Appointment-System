<?php
    require_once('functions/function.php');
    get_part('header.php');

    if(isset($_POST['send'])){
		$name=htmlentities($_POST['name'],ENT_QUOTES);
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		$user_role=$_POST['role'];
		// $photo=$_FILES['photo'];
		// $ImageName='user-'.time().'-'.md5(rand(10000,100000)).'.'.pathinfo($photo['name'],PATHINFO_EXTENSION);

		if(empty($username)||(empty($password))){
			echo"<script>window.alert('please fill up the required fields!!')</script>";
 			exit();
			}
		else{
		$insert="INSERT INTO users(name,email,phone,username,password,role_id)VALUES('$name','$email','$phone','$username','$password','$user_role')";
		$qry=mysqli_query($con,$insert);
		if($qry){
			// if($ImageName!=''){
      //       move_uploaded_file($photo['tmp_name'], 'uploads/'.$ImageName);
			 header('Location: login.php');
			}
			else{
				 echo"window.alert('Product insert Failed!!')";
				}
		}
	}
?>
<body>
<div class="center-container">

	<!--header-->
	<div class="header-w3l">
		<h1>Patient Registration Form</h1>
	</div>
	<!--//header-->

	<!--main-->
	<div class="main-content-agile">
		<div class="sub-main-w3">
			<form action="#" method="post">
				<div class="field">
					<i class="fa fa-user"></i>
					<input placeholder="Full Name" name="name" type="text" required="">
				</div>
				<div class="field">
					<i class="fa fa-envelope"></i>
					<input placeholder="E-mail" name="email" type="email" required="">
				</div>
        <div class="field">
					<i class="fa fa-user"></i>
					<input placeholder="Username" name="username" type="text" required="">
				</div>
				<div class="field">
					<i class="fa fa-phone"></i>
					<input  placeholder="Phone Number" name="phone" type="tel" required="">
				</div>
        <div class="field">
					<i class="fa fa-lock"></i>
					<input placeholder="Password" name="password" type="password" required="">
				</div>
        <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">User-Role</label>
                <div class="col-sm-5">
                  <select name="role" class="form-control">
                  <option value="">Select User Role</option>
                   <?php
				  	$select="select * from user_role";
					$query=mysqli_query($con,$select);
					while($data=mysqli_fetch_array($query)){
				  ?>
                  <option value="<?=$data['role_id'];?>"><?=$data['role_name'];?></option>
                  <?php } ?>
                  </select>
                </div>
        </div>
              <br>
				<p><i class="fa fa-lock"></i> Your information is safe with us</p>
				<input type="submit" name="send" value="Get Access Today">
			</form>
		</div>
	</div>
	<!--//main-->


</div>
<br>

<?php
    get_part('footer.php');
?>
