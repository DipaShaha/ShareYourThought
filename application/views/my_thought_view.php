<?php include 'layout/head.php';?>
<?php include 'layout/header.php';?>

  	<div class="login-page">
      <div id="msg" style="color:red;">
          <?php $message = $this->session->flashdata('log_error'); echo " ".$message; 
           ?>
      </div><!--msg -->
    </div><!--login -->

    <div class="container-fluid" style="margin-top:80px;">
      <h2 style="text-align:center;margin-bottom:25px;">My Thoughts...</h2>
        <div class="row">   
        <?php include 'layout/sidebar.php';?>

          <div class="col-md-8">
                    <?php
              foreach ($my_thought as $thought) 
            {
            ?>
            <div class="blockquote-box clearfix" style=" border-right: none;">
              
                 <div class="square pull-left">
                  <img src="<?php echo base_url();?>assets/images/<?php echo $thought['image']?>" 
                  alt="" height="100" width="100" />
                </div>
                <div style="margin-bottom:2px;">
                  <h3 style="display:inline;"><?php echo $thought['uname'];?></h3>
                  <h5 style="display:inline;float:right;">
                     <?php 
                  $date_time= $thought['time'];
                   
                  date_default_timezone_set('Asia/Dhaka');
                  
                   
                   $date1 = new DateTime($date_time);
                   $date= $date1->getTimestamp();
                   
                   $now=time();
                   
                   
                               
                   echo timespan($date, $now) . ' ago';
                  
                  
                  
                  
                  ?>


                  </h5>
                </div>  
                <h4  style=""><?php echo $thought['title'];?></h4>
                    
                <p id="desp">
                    <?php    $desp=$thought['desp'];
                    $len=strlen($desp);
                    if($len>450)
                    {
                      $small_desp = substr($desp, 0, 450);
                      echo $small_desp."   "; 
                      ?>
                      <a href="<?php echo base_url() ?>/thought/full_view/<?php echo $thought['thought_id']; ?>" target="_blank" >
                        See more...</a>
                     <?php 
                     }else{
                      echo $desp."<br>";}

                     ?>

                     
                </p>
                  
                 
                  <a href="<?php echo base_url() ?>/thought/edit_view/<?php echo $thought['thought_id']; ?>" type="button" value="Edit" class="btn btn-warning btn-xsm">Edit</a>&nbsp;
                 <a href="<?php echo base_url() ?>/thought/delete/<?php echo $thought['thought_id']; ?>" type="button" value="Edit" class="btn btn-danger btn-sm">Delete</a>
            </div><!--blockquote-->
            <?php 
            } 
            ?>

          </div><!--col-md-offset-2 col-md-8-->
          <div class="col-md-2">
          </div><!--col-md-2-->
      
      <br>

      </div><!--row-->
    </div><!--container-fluid-->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

     <script type="text/javascript">
    function savelike(thought_id)
    {
      
            $.ajax({
                    type: "POST",
                    dataType: 'json',
                    url: "<?php echo site_url('thought/savelikes');?>",
                    data: "thought_id="+thought_id,
                    success: function (msg)
                     { 

                      if(msg.res=="Liked"){
                        $("#like_"+thought_id).text(msg.res+" "+msg.total_likes);

                      }
                     
                    },
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        alert("Error: " + errorThrown); 
    }  
                  });
    }
    </script>
  </body>
</html>