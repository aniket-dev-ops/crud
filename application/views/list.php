<!DOCTYPE html>
<html>
<head>
<title> CURD PROJECT </title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
</head>
<body>
<div class="navbar navbar-dark bg-dark">

   <div class="container">
   <a href="#" class="navbar-brand">CRUD APP - View User</a>
   </div>
</div>


<div class="container">
   <h3>Users</h3>
   <hr>

  <div class="row">
            <div class-"col-md-12">

                        <div class="row">
                        <div class="col-md-12">
                                <?php
                                  $success = $this->session->userdata('success');
                                  if($success != ""){
                                      ?>
                                      <div class="alert alert-success"><?php echo $success;?></div>
                                      <?php

                                  }        ?>                    
                                   

                                   
                                <?php
                                  $failure = $this->session->userdata('failure');
                                  if($failure != ""){
                                      ?>
                                      <div class="alert alert-success"><?php echo $failure;?></div>
                                      <?php

                                  }        ?>


                        </div>
                        </div>


                <table class="table table-striped">
                            <tr>
                                    <th> ID</th>
                                    <th> NAME</th>
                                    <th> EMAIL</th>
                                    <th> MOBILE NUMBER</th>
                                    <th> DATE OF BIRTH</th> 
                                    <th> PINCODE</th>
                                    <th> EDIT </th>   
                                    <th> DELETE</th>
                            </tr>

                                <?php if(!empty($users)){ foreach($users as $user) {?>
                           
                           
                           
                           
                           
                            <tr>
                                  <td><?php echo $user['id']?></td>
                                  <td><?php echo $user['name']?></td>
                                  <td><?php echo $user['email']?></td>
                                  <td><?php echo $user['mnum']?></td>
                                  <td><?php echo $user['dob']?></td>
                                  <td><?php echo $user['pincode']?></td>
                                  <td> <a href="<?php echo base_url().'index.php/user/edit/'.$user['id']?>" class="btn btn-primary">EDIT</a></td>
                                  <td> <a href="<?php echo base_url().'index.php/user/delete/'.$user['id']?>" class="btn btn-primary">DELETE</a></td>
                            </tr>
                                <?php } } else { ?>
                                <tr>
                                   <td colspan="5"> not found </td>
                                </tr>
                                <?php } ?>
                </table>

            </div>
    </div>

   </div>

</body>

</html>
