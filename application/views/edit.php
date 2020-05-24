<!DOCTYPE html>
<html>
<head>
<title> CURD PROJECT </title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
</head>
<body>
<div class="navbar navbar-dark bg-dark">

   <div class="container">
   <a href="#" class="navbar-brand">CRUD APP  -  UPDATE</a>
   </div>
</div>


<div class="container">
<form method="post" name="createUser" action="<?php echo base_url().'index.php/user/create';?>">
       <div class="row">
          <div class="col-md-12">
            <div class="form-group">
                <label>  Name </label>
                <input type="text" name="name" value="<?php  echo set_value('name',$user['name']);?>" class="form-control"> 
                <?php// echo form_error('name'); ?>
            </div>
            <div class="form-group">
                <label>  Email </label>
                <input type="text" name="email" value="<?php  echo set_value('email',$user['email']);?>" class="form-control">
                <?php //echo form_error('email'); ?>
            </div>
            <div class="form-group">
                <label>  Mobile Number </label>
                <input type="text" name="mn" value="<?php  echo set_value('mnum',$user['mnum']);?>" class="form-control">
            </div>
            <div class="form-group">
                <label>  Date OF Birth </label>
                <input type="Date" name="dob" value="<?php  echo set_value('dob',$user['dob']);?>" class="form-control">
            </div>
            <div class="form-group">
                <label>  Pincode </label>
                <input type="text" name="pc" value="<?php  echo set_value('pc',$user['pincode']);?>" class="form-control">
            </div>
            <div class="form-group">
               <button class="btn btn-primary">Submit</button>
               <a href="" class="btn btn-secondary btn">Cancel</a>
            </div>
            </div>


          </div>
       </div>
       </form>
   </div>

</body>

</html>
