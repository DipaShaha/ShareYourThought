  <body>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#5BBC2E;">
        <div class="container-fluid">
          <div class="navbar-header">
              <a href="logo" style="color:white;text-decoration:none;font-size:18px;"><img src="<?php echo base_url();?>assets/images/logo.png"
                height="30" width="30"><i><b>HareYourThought</b></i></a>
          </div><!--navbar-header--> 
          <div class="collapse navbar-collapse" id="collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="<?php echo site_url('home/index') ?>">Home</a></li>
              <li class=""><a href="#featured">About Us</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="<?php echo site_url('home/all_thought') ?>">All Thought</a></li>
    
              
             <li class=""><a href="<?php echo site_url('logout/index') ?>">Logout
                </a></li>
            </ul>        
          </div><!-- collapse navbar-collapse -->
        </div><!--container-fluid-->  
      </nav><!--nav-->  
    </header><!--header-->