<?php 

include('actpage.php');
include('function.php');
include('menu.php');



if(isset($_GET['type']) && $_GET['type']!=='' && isset($_GET['id']) && $_GET['id']>0){
	$type=get_safe_value($_GET['type']);
	$id=get_safe_value($_GET['id']);
	$uname=$_SESSION['username'];
	if($type=='delete'){
		mysqli_query($con,"delete from category where id='$id' and username='{$_SESSION['username']}'");
		redirect('category.php');
	}
	if($type=='active' || $type=='deactive'){
		$status=1;
		if($type=='deactive'){
			$status=0;
		}
		mysqli_query($con,"update category set status='$status' where id='$id' and username='{$_SESSION['username']}'");
		redirect('category.php');
	}

}
$sql="select * from category  where username='{$_SESSION['username']}'";
$res=mysqli_query($con,$sql);

 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Food Ordering Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./css/materialdesignicons.min.css">
  <link rel="stylesheet" href="./css/vendor.bundle.base.css">
  <link rel="stylesheet" href="./css/dataTables.bootstrap4.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="./bootstrap-datepicker.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./css/style2.css">
  <link rel="stylesheet" href="./images/CSSpage.css">
  </head>
<div class="card">
            <div class="card-body">
              <h1 class="grid_title">Category Master</h1>
			  <a href="orderpage.php" class="add_link">Add Category</a>
              <div class="row grid_box">
			  <div id="rr1">
				<h1>Price: </h1>
				</div>
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th width="10%">S.No</th>
                            <th width="50%">Category</th>
                            <th width="15%">Dish name</th>
                            <th width="25%">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(mysqli_num_rows($res)>0){
						$i=1;
						while($row=mysqli_fetch_assoc($res)){
						?>
						<tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $row['category']?></td>
							<td><?php echo $row['order_number']?></td>
							<td>
								<a href="manage_category.php?id=<?php echo $row['id']?>"><label class="badge badge-success">Edit</label></a>&nbsp;
								<?php
								if($row['status']==1){
								?>
								<a href="?id=<?php echo $row['id']?>&type=deactive"><label class="badge badge-danger">Active</label></a>
								<?php
								}else{
								?>
								<a href="?id=<?php echo $row['id']?>&type=active"><label class="badge badge-info">Deactive</label></a>
								<?php
								}
								
								?>
								&nbsp;
								<a href="?id=<?php echo $row['id']?>&type=delete"><label class="badge badge-danger delete_red">Delete</label></a>
							</td>
                           
                        </tr>
                        <?php 
						$i++;
						} } else { ?>
						<tr>
							<td colspan="5">No data found</td>
						</tr>
						<?php } ?>
                      </tbody>
                    </table>
                  </div>
				</div>
              </div>
            </div>
          </div>
