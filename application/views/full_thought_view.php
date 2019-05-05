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
        <?php
              foreach ($thought as $thought) 
            {
            ?>
        <div class="row">  
         <!--include sidebar  -->
        <?php include 'layout/sidebar.php';?>  
        <!--include sidebar  -->

          <div class="col-md-8">
            <div class="blockquote-box clearfix" style=" border-right: none;">
                <div class="square pull-left">
                  <img src="<?php echo base_url();?>assets/images/default.png" alt="" class="" />
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
                    <?php echo $thought['desp'];?>
                    
                </p>
                   <button onclick="javascript:savelike(<?php echo $thought['thought_id'];?>);" 
                   type="button" class="btn btn-default btn-sm" value=""style="background:green;color:white;">
                      
                      <span id="like_<?php echo $thought['thought_id'];?>" 
                        class="glyphicon glyphicon-thumbs-up" >
                         <p id="no" style="display:inline;" >
                            
                            <?php
                            $user_id=$this->session->userdata('user_id');
                            $txt=$thought['likes'];
                              foreach ($all_likes as $likes) 
                            {
                              if(($likes['thought_id']==$thought['thought_id']) &&
                                ($likes['user_id']==$user_id))
                              {
                                $txt=" liked ". $thought['likes'];
                                break;

                              }
                            }
                            echo $txt;
                            ?>
                         </p></span>
                  </button>
                  
                  <div>  <br>
                  <?php $id= $this->session->userdata('user_id');if($thought['thought_id'] ==$id )
                  {?>
                  <a href="<?php echo base_url() ?>/thought/edit_view/<?php echo $thought['thought_id']; ?>" type="button" value="Edit" class="btn btn-warning btn-xsm">Edit</a>&nbsp;
                 <a href="<?php echo base_url() ?>/thought/delete/<?php echo $thought['thought_id']; ?>" type="button" value="Edit" class="btn btn-danger btn-sm">Delete</a></div>
               <?php }?>
            </div><!--blockquote-->

          </div><!--col-md-offset-2 col-md-8-->
          <div class="col-md-2">

          </div><!--col-md-2-->
      </div><!--row-->
      <br>
        <?php 
            } 
            ?>
    </div><!--container-fluid-->


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