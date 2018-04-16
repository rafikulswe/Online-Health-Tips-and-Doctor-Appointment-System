<?php session_start();
    require_once('functions/function.php');
    needLogged();
    get_part('header.php');

?>

<div class="center-container">

	<!--header-->
	<div class="header-w3l">
		<h1>Felling Tired!</h1>
		<h1>Find A Doctor.</h1>
	</div>
	<!--//header-->

	<!--main-->
	<div class="main-content-agile">
			<h2>Get Free Email Updates!<i class="fa mail fa-envelope"></i></h2>
			<h3>Join us for free to get instant email updates</h3>
		<div class="sub-main-w3">

			<form action="#" method="post">
				<!-- <div class="field">
					<i class="fa fa-map"></i>
					<input placeholder="Your Location" name="location" type="text" required="">
				</div> -->
        <div class="form-group">
                <label for="inputEmail3" class="control-label">User-Role</label>
                <div class="col-sm-12">
                  <select name="location" class="form-control">
                  <option value="">Select Location</option>
                   <?php
				  	$select="select * from locations";
					$query=mysqli_query($con,$select);
					while($data=mysqli_fetch_array($query)){
				  ?>
                  <option value="<?=$data['location_id'];?>"><?=$data['location_name'];?></option>
                  <?php } ?>
                  </select>
                </div>
        </div>
        <div class="form-group">
                <label for="inputEmail3" class="control-label">User-Role</label>
                <div class="col-sm-12">

                  <select name="specialist" class="form-control">
                  <option value="">Specialist AT</option>
                   <?php
				  	$select="select * from specialist";
					$query=mysqli_query($con,$select);
					while($data=mysqli_fetch_array($query)){
				  ?>
                  <option value="<?=$data['specialist_id'];?>"><?=$data['specialist_at'];?></option>
                  <?php } ?>
                  </select>
                </div>
        </div>
              <br>
				<p><i class="fa fa-lock"></i> Your information is safe with us</p>
				<a href="doctorlist.php">See Doctor List</a>

			</form>

		</div>
	</div>
	<!--//main-->


</div>
<br>

<?php
get_part('footer.php');
?>
