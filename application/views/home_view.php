<html>
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="<?php echo base_url();?>assets/css/home.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
  <header>
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#5BBC2E;">
        <div class="container-fluid">
          <div class="navbar-header">
                <a href="logo" style="color:white;text-decoration:none;font-size:18px;"><img src="<?php echo base_url();?>assets/images/logo.png"
           height="30" width="30"><i><b>HareYourThought</b></i></a>
          </div>
          <div class="collapse navbar-collapse" id="collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#featured">Home</a></li>
              <li class=""><a href="<?php echo site_url('home/index') ?>">About Us</a></li>
              <li><a href="<?php echo site_url('home/index') ?>">Contact</a></li>              
              <li class=""><a href="<?php echo site_url('login/index') ?>">SignIn</a></li>
            </ul>        
          </div><!-- collapse navbar-collapse -->
        </div><!--container-fluid-->  
      </nav><!--nav-->  
  </header><!--header--> 

  <div class="carousel slide" data-ride="carousel" id="featured">
    <div class="carousel-inner">
      <div class="item active">
            <img src="<?php echo base_url();?>assets/images/slide1.jpg" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                              <span>Welcome to <strong><i>ShareYourThought</i></strong></span>
                            </h2>
                            <br>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" 
                                href="<?php echo site_url('login/index') ?>">Login</a>
                                <a class="btn btn-theme btn-sm btn-min-block"
                                 href="<?php echo site_url('register/index') ?>">Register</a></div>
                        </div>
                    </div><!-- /header-text -->    
    </div><!-- carousel-inner -->  
  </div><!-- featured carousel -->


 <div class="page" id="fquotes">
    <div class="content container">
      <h2  id="qt">Thoughts of Famous people</h2>
      <div class="row">
           <blockquote class="quote-box col-sm-5" style="margin-right:10px;">
                    <p class="quotation-mark">
                      “
                    </p>
                    <p class="quote-text">
                    Chemistry, unlike other sciences, sprang originally from delusions and superstitions, and was at its commencement exactly on a par with magic and astrology.
                    </p>
                    <hr>
                    <div class="blog-post-actions">
                      <p class="blog-post-bottom pull-left">
                          THOMAS THOMSON
                      </p>
                      <p class="blog-post-bottom pull-right">
                         <!-- <span class="badge quote-badge">896</span>  ❤ -->

                      </p>
                    </div>
        </blockquote>

           <blockquote class="quote-box col-sm-6">
                    <p class="quotation-mark">
                      “
                    </p>
                    <p class="quote-text">
                    Chemistry, unlike other sciences, sprang originally from delusions and superstitions, and was at its commencement exactly on a par with magic and astrology.
                    </p>
                    <hr>
                    <div class="blog-post-actions">
                      <p class="blog-post-bottom pull-left">
                          Dale Carnegie
                      </p>
                      <p class="blog-post-bottom pull-right">
                         <!-- <span class="badge quote-badge">896</span>  ❤ -->

                      </p>
                    </div>
           </blockquote>
           <blockquote class="quote-box col-sm-6" style="margin-right:10px;">
                    <p class="quotation-mark">
                      “
                    </p>
                    <p class="quote-text">
                    You've gotta dance like there's nobody watching,Love like you'll never be hurt,Sing like there's nobody listening,And live like it's heaven on earth


                    </p>
                    <hr>
                    <div class="blog-post-actions">
                      <p class="blog-post-bottom pull-left">
                          William W. Purkey
                      </p>
                      <p class="blog-post-bottom pull-right">
                         <!-- <span class="badge quote-badge">896</span>  ❤ -->

                      </p>
                    </div>
        </blockquote>  
         <blockquote class="quote-box col-sm-5">
                    <p class="quotation-mark">
                      “
                    </p>
                    <p class="quote-text">
                     Feeling sorry for yourself, and your present condition, is not only a waste of energy but the worst habit you could possibly have.

                    </p>
                    <hr>
                    <div class="blog-post-actions">
                      <p class="blog-post-bottom pull-left">
                          Dale Carnegie
                      </p>
                      <p class="blog-post-bottom pull-right">
                         <!-- <span class="badge quote-badge">896</span>  ❤ -->

                      </p>
                    </div>
        </blockquote>  
      </div><!-- row -->   
    </div><!-- content container -->
  </div><!-- services page -->









    <!-- footer-wrapper -->
  <div id="footer-wrapper">
    <div id="footer" class="container-fluid" class="row">
      <div id="fbox" class="col-sm-3">
        <h2>About Us</h2>
        <p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum.</p>
        <a class="btn btn-lrn" href="#">Learn More</a> </div>
      <div id="fbox" class="col-sm-3">
        <h2>Contact Us</h2>
        <p>Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Duis pretium velit ac mauris.</p>
        <a href="#" class="btn btn-lrn">Learn More</a> </div>
      <div id="fbox" class="col-sm-3">
        <h2>Our Partners</h2>
        <p>Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem semper eleifend.</p>
        <a href="#"  class="btn btn-lrn">Learn More</a> </div>
      <div id="fbox" class="col-sm-3">
        <h2>History</h2>
        <p>Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem semper eleifend.</p>
        <a href="#"  class="btn btn-lrn">Learn More</a> </div>
    </div>
  </div><!-- footer-wrapper -->

  <div id="copyright">
    <p style="color:#272822;">&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
  </div>
</body>
</html>
