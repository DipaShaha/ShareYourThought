          <div class="col-sm-2" style="">
            <ul id="sidebar" class="nav nav-stacked affix" style="color: white;
               padding: 5px 10px;font-size: 20px;  font-weight: 200;border-right:3px solid #0E9F5A;">
                     <li id="profile">
                      <figure class="profile-userpic">
                        <img src="<?php echo base_url();?>assets/images/<?php
                        $image=$this->session->userdata('image'); echo $image;?>" height="120" width="120"class="img-responsive" alt="Profile Picture">
                      </figure>
                      <div class="profile-usertitle">
                        <div class="profile-usertitle-name"><?php $user_name=$this->session->userdata('username'); echo $user_name." ";?></div>
                        <div class="profile-usertitle-title">
                          <a href="<?php echo base_url();?>/user/change_image_view">Change Image</a></div>
                      </div>

                    </li>
                <li style=" border-bottom: 4px solid #1BA261;"  ><a style="color: #18A15E;" href="<?php echo site_url('home/all_thought') ?>">All Thoughts</a></li>
                <li  style=" border-bottom: 4px solid #1BA261;"><a style="color: #18A15E;" href="<?php echo site_url('thought/index') ?>">Add New Thought</a></li>
                <li  style=" border-bottom: 4px solid #1BA261;"><a style="color: #18A15E;" href="<?php echo site_url('thought/my_thought') ?>">MyThoughts</a></li>
            </ul>
          </div>