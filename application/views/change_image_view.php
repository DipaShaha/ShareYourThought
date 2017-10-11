<?php include 'layout/head.php';?>

<?php include 'layout/header.php';?>

  

    <div class="container-fluid" style="margin-top:80px;">
      <h2 style="text-align:center;margin-bottom:25px;">Change Profile Image</h2>
        <div class="row">   
        <?php include 'layout/sidebar.php';?>
          <div class="col-md-8">
            <form class="login-form" id="login" method="post" 
             action="<?php echo site_url('user/update_image'); ?>"enctype="multipart/form-data" >
             <div class="form-group">
                    <div id="msg" style="color:red;" style="margin-top:80px;">
                    <?php $message = $this->session->flashdata('image_error'); echo " ".$message; 
                     ?>
                </div><!--msg -->
             </div><!--form-group -->
              <div class="form-group">
                <label>Current Image: </label>
                  
                 <img src="<?php echo base_url();?>assets/images/<?php
                        $image=$this->session->userdata('image'); echo $image;?>" height="100" width="100"class="img-responsive" alt="Profile Picture">
              </div>
              <div class="form-group">
                 <input type = "file" name = "userfile"/> 
              </div>
              <div class="form-group">
              <button type="submit" class="btn btn-success">Submit</button>&nbsp;
               <a href="<?php echo base_url();?>/thought/get_all" type="button" value="Edit" class="btn btn-danger btn-sm">Cancel</a>
              </div>
            </form>
          </div><!-- col-md-8-->
          <div class="col-md-2">
          </div><!--col-md-2-->
      


      </div><!--row-->
    </div><!--container-fluid-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
CKEDITOR.replace('edi');
</script> 
  
  </body>
</html>