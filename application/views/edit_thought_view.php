<?php include 'layout/head.php';?>

<?php include 'layout/header.php';?>

    <div class="login-page">
      <div id="msg" style="color:red;">
          <?php $message = $this->session->flashdata('log_error'); echo " ".$message; 
           ?>
      </div><!--msg -->
    </div><!--login -->

    <div class="container-fluid" style="margin-top:80px;">
      <h2 style="text-align:center;margin-bottom:25px;">Recent Shared Thoughts...</h2>
        <div class="row">   
        <?php include 'layout/sidebar.php';?>
          <div class="col-md-8">
            <form class="login-form" id="login" method="post"  accept-charset="utf-8"
             action="<?php echo site_url('thought/update') ?>" >
              <div class="form-group">
                <div id="msg" style="color:red;" style="margin-top:80px;">
                  <?php $message = $this->session->flashdata('log_error'); echo " ".$message; 
                  ?>
                </div><!--msg -->
             </div><!--form-group -->
             <?php foreach ($thought as $value) {
              
             ?>
               <input type="hidden" class="form-control" id="thought_id" name="thought_id"
                value="<?php echo $value['thought_id']?>">
              <div class="form-group">
                <input type="text" class="form-control" id="title" name="title"
                value="<?php echo $value['title']?>">
              </div>
              <div class="form-group">
                 <textarea id="edi" name="edi"  value=""><?php echo $value['desp']?>
                  </textarea>
              </div>
              <?php }?>
              <div class="form-group">
              <button type="submit" class="btn btn-success">Submit</button>
                  <a href="<?php echo base_url();?>/thought/my_thought?>" type="button" value="Edit" class="btn btn-danger btn-sm">Cancel</a>&nbsp;
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