<?php session_start();
    require_once('functions/function.php');
    needLogged();
    get_part('header.php');
    	$id=$_GET['v'];
      	// print_r($id);


        if(isset($_POST['send'])){
    		$name=htmlentities($_POST['name'],ENT_QUOTES);
    		$email=$_POST['email'];
    		$patientid=$_POST['patientid'];
    		$doctorid=$_POST['doctorid'];
    		$date=$_POST['date'];
    		$user_role=$_POST['role'];
    		// $photo=$_FILES['photo'];
    		// $ImageName='user-'.time().'-'.md5(rand(10000,100000)).'.'.pathinfo($photo['name'],PATHINFO_EXTENSION);

    		if(empty($name)||(empty($doctorid))){
    			echo"<script>window.alert('please fill up the required fields!!')</script>";
     			exit();
    			}
    		else{
    		$insert="INSERT INTO appointment(patient_name,patient_email,patient_id,doctor_id,ap_date,time_id)VALUES('$name','$email','$patientid','$doctorid','$date','$user_role')";
    		$qry=mysqli_query($con,$insert);
    		if($qry){
    			
           echo"Appointment confimed.";
           header('Location: ownappointment.php');
    			}
    			else{
    				 echo"window.alert('Appointment confimation Failed!!')";
    				}
    		}
    	}
?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="col-sm-9">
                <strong>Doctor Appointment Form</strong>
            </div>
            <div class="col-sm-3">
                <a href="all-user.php" class="amar_btn"> <i class="fa fa-plus-square"></i> All User</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="panel-body">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">


              <div class="form-group">
                <div class="col-sm-8">
                  <input type="hidden" value="<?=$_GET['v'];?>" name="doctorid" class="form-control" id="inputEmail3">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-8">
                  <input type="hidden" value="<?=$_SESSION['id'];?>" name="patientid" class="form-control" id="inputEmail3">
                </div>
              </div>


              <div class="form-group">
                <div class="col-sm-8">
                  <input type="hidden" value="<?=$_SESSION['email'];?>" name="email" class="form-control" id="inputEmail3">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-8">
                  <input type="hidden" value="<?=$_SESSION['name'];?>" name="name" class="form-control" id="inputEmail3">
                </div>
              </div>




              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Date<span class="req_span">*</span></label>
                <div class="col-sm-8">
                  <input type="date" name="date" class="form-control" id="inputEmail3">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Time Slot</label>
                <div class="col-sm-5">
                  <select name="role" class="form-control">
                  <option value="">Select Time Slot</option>
                   <?php
            $select="select * from time_slot";
          $query=mysqli_query($con,$select);
          while($data=mysqli_fetch_array($query)){
          ?>
                  <option value="<?=$data['time_id'];?>"><?=$data['time_slot'];?></option>
                  <?php } ?>
                  </select>
                </div>
              </div>



              <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-8">
                    <input type="submit" class="btn btn-default" name="send" value="CONFIRM">
                </div>
              </div>
            </form>
          </div>
          <div class="panel-footer">
            .
          </div>
        </div>
    </div>
</div>


<?php
get_part('footer.php');
?>
