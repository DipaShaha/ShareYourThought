<?php include 'layout/head.php';?>

<?php include 'layout/header.php';?>

    <div class="login-page">
   
    </div><!--login -->

    <div class="container-fluid" style="margin-top:80px;">
      <h2 style="text-align:center;margin-bottom:25px;">Recent Shared Thoughts...</h2>
        <div class="row">   
        <?php include 'layout/sidebar.php';?>
          <div class="col-md-8">
            <form class="login-form" id="login" method="post" 
             action="<?php echo site_url('thought/insert') ?>" >
             <div class="form-group" stye="dispaly:center;">
                <div id="msg" style="color:red;">
                  <?php $message = $this->session->flashdata('log_error'); echo " ".$message; 
                   ?>
              </div><!--msg -->
            </div>
              <div class="form-group">
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" name="email">
              </div>
              <div class="form-group">
                 <textarea id="edi" name="edi"  plcaceholder="write your thoughts here">
                  </textarea>
              </div>
              <div class="form-group">
              <button type="submit" class="btn btn-success">Submit</button>
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