<?php session_start();
    require_once('functions/function.php');
    get_part('header.php');
?>
<div class="center-container">

	<!--header-->
	<div class="header-w3l">


	</div>
	<!--//header-->

	<!--main-->
	<div class="main-content-agile">
		<div class="sub-main-w3">

      <?php
                      if(isset($_POST['send'])){
      								$name=$_POST['username'];
      								$password=md5($_POST['password']);
      								$sel="SELECT * FROM users WHERE username='$name' AND password='$password'";
      								$qry=mysqli_query($con, $sel);
      								$res=mysqli_fetch_array($qry);
      								if($res){
      									// $_SESSION['id']=$res['id'];
      									$_SESSION['id']=$res['u_id'];
      									$_SESSION['name']=$res['name'];
      									$_SESSION['user']=$res['username'];
      									$_SESSION['email']=$res['email'];
      									// $_SESSION['role']=$res['role_id'];
      									$_SESSION['last_time']=time();

      									header('location: index.php');
      								}else{
      									echo "Username and Password incorrect!!!";
      									}
      								}
      ?>

			<form action="#" role="form" method="post">
				<div class="field">
					<i class="fa fa-user"></i>
					<input placeholder="Username" name="username" type="text" required="">
				</div>
				<div class="field">
					<i class="fa fa-lock"></i>
					<input placeholder="Password" name="password" type="password" required="">
				</div>

				<p><i class="fa fa-lock"></i> Your information is safe with us</p>

				<input type="submit" name="send" value="LOGIN">
        <br>
        <a href="registration.php">New Registration</a>
			</form>
		</div>
	</div>
	<!--//main-->


</div>
<br>

<?php
    get_part('footer.php');
?>
