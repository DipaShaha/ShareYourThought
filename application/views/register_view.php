<html>
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link href="<?php echo base_url();?>assets/css/menu.css" rel="stylesheet" type="text/css" media="all" />
  <link href="<?php echo base_url();?>assets/css/login.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
  <header>
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#5BBC2E;">
      <div class="container-fluid">
        <div class="navbar-header">
              <a href="logo" style="color:white;text-decoration:none;font-size:18px;"><img src="<?php echo base_url();?>assets/images/logo.png"
         height="30" width="30"><i><b>HareYourStory</b></i></a>
        </div>
        <div class="collapse navbar-collapse" id="collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="<?php echo site_url('home/index') ?>">Home</a></li>
            <li class=""><a href="#featured">About Us</a></li>
            <li><a href="#contact">Contact</a></li>            
            <li class=""><a href="<?php echo site_url('login/index') ?>">SignIn</a></li>
          </ul>        
        </div><!-- collapse navbar-collapse -->
      </div><!--container-fluid-->  
    </nav><!--nav-->  
  </header><!--header--> 
  
  
  <div class="login-page">
    <div id="msg" style="color:red;">
        <?php $message = $this->session->flashdata('error'); echo " ".$message; ?>
    </div><br>
  <div class="form">
    <form class="register-form" id="regForm" method="post" action="<?php echo site_url('register/check_register') ?>" >
      <input id="uname" name="uname" type="text" placeholder="Your name"/>
      <input id="email" name="email" type="email" placeholder="email address"/>
      <input type="password" id="pass" name="pass" placeholder="password"/>
      <input type="password" id="repass" name="repass" placeholder="Confirm password"/>
      
      <button type="submit">Register</button>
      <p class="message">Already registered? <a href="<?php echo site_url('login/index') ?>" id="reg">Sign In</a></p>
    </form>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>