<?php session_start();
    require_once('functions/function.php');
    needLogged();
    get_part('header.php');

?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="col-sm-9">
                <strong>Doctors Information list</strong>
            </div>
            <div class="col-sm-3">
                <a href="add-user.php" class="amar_btn"> <i class="fa fa-plus-square"></i> Add User</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="panel-body">
          <form method="get" action="search-doctor.php">
          <input type="text" placeholder="specialist_at" name="search" />
          <input type="submit" value="search" />
          </form>
            <table class="table table-striped table-responsive table-hover amar_table">
                <thead>
                    <tr>
                        <th>Doctors Name</th>
                        <th>Doctors Email</th>
                        <th>Specialist</th>
                        <th>Hospital Name</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  $search=$_GET['search'];
                    $sel="select * from doctors natural join specialist where specialist_at like '%$search%' or hospital like '%$search%' or name like '%$search%'";
                  $qry=mysqli_query($con,$sel);
                  while($data=mysqli_fetch_array($qry)){
                  ?>
                    <tr>
                        <td><?=html_entity_decode($data['name']);?></td>
                        <td><?=$data['email'];?></td>
                        <td><?=$data['specialist_at'];?></td>
                        <td><?=$data['hospital'];?></td>
                        <td>
                            <a href="doctor-appointment.php?v=<?=$data['id'];?>" title="View">Take Appointment<i class="fa fa-plus-appointment"></i></a>
                        </td>
                    </tr>
                  <?php
					}
				  ?>
                </tbody>
            </table>
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
