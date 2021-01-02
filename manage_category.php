<?php 
include('actpage.php');
include('function.php');
include('menu.php');
$msg="";
$category="";
$order_number="";
$id="";

if(isset($_GET['id']) && $_GET['id']>0){
	
	$id=get_safe_value($_GET['id']);
	$row=mysqli_fetch_assoc(mysqli_query($con,"select * from category where id='$id'"));
	$category=$row['category'];
	$order_number=$row['order_number'];
}

if(isset($_POST['submit'])){
	$category=get_safe_value($_POST['category']);
	$order_number=get_safe_value($_POST['order_number']);
	$added_on=date('Y-m-d h:i:s');
	
	if($id==''){
		$sql="select * from category where order_number='$order_number' and username='{$_SESSION['username']}'";
	}else{
		$sql="select * from category where order_number='$order_number' and id!='$id'  and username='{$_SESSION['username']}'";
	}	
	if(mysqli_num_rows(mysqli_query($con,$sql))>0){
		$msg="Dish already added";
	}else{
		if($id==''){
			mysqli_query($con,"insert into category(username,category,order_number,status,added_on) values('{$_SESSION['username']}','$category','$order_number',1,'$added_on')");
		}else{
			mysqli_query($con,"update category set category='$category', order_number='$order_number' where id='$id' and username='{$_SESSION['username']}'");
		}
		
		redirect('category.php');
	}
	

}
?>

<div class="row">
			<h1 class="grid_title ml10 ml15">Manage Category</h1>
			
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Category</label>
                      <input type="text" class="form-control" placeholder="Category" name="category" required value="<?php echo $category?>">
					  
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3" required>Dish name</label>
                      <input type="textbox" class="form-control" placeholder="Order Number" name="order_number"  value="<?php echo $order_number?>">
					  <div class="error mt8"><?php echo $msg?></div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2" name="submit" >Submit</button>
                  </form>
                </div>
              </div>
            </div>
            
		 </div>
        