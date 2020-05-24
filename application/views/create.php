<!DOCTYPE html>
<html>
<head>
<title> CURD PROJECT </title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
</head>
<body>
<div class="navbar navbar-dark bg-dark">

   <div class="container">
   <a href="#" class="navbar-brand">CRUD APP</a>
   </div>
</div>


<div class="container">
<form method="post" name="createUser" action="<?php echo base_url().'index.php/user/create';?>">
       <div class="row">
          <div class="col-md-12">
            <div class="form-group">
                <label>  Name </label>
                <input type="text" name="name" value="" class="form-control"> 
                <?php echo form_error('name'); ?>
            </div>
            <div class="form-group">
                <label>  Email </label>
                <input type="text" name="email" value="" class="form-control">
                <?php echo form_error('email'); ?>
            </div>
            <div class="form-group">
                <label>  Mobile Number </label>
                <input type="text" name="mn" value="" class="form-control">
            </div>
            <div class="form-group">
                <label>  Date OF Birth </label>
                <input type="Date" name="dob" value="" class="form-control">
            </div>
            <div class="form-group">
                <label>  Pincode </label>
                <input type="text" name="pc" value="" class="form-control">
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
