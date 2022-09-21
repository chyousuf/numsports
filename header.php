<?php
if(basename($_SERVER["SCRIPT_FILENAME"], '.php') != 'index'){
?>
<script type="text/javascript">
  var widgetId1;
  //var widgetId2;
  var onloadCallback = function() {
    /*widgetId1 = grecaptcha.render('covid_form', {
      'sitekey' : '6Le_qNsaAAAAAKMET1T40jWYxHHrkwlwNEymEngG',
      'theme' : 'light'
    });*/

    grecaptcha.render('gCaptcha', {
      'sitekey' : '6Le_qNsaAAAAAKMET1T40jWYxHHrkwlwNEymEngG',
      'size' : 'normal'
    });
  };
</script>
<?php
}
?>
<?php
// Program to display current page URL.
  
//$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
//                "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . 
//                dirname($_SERVER['PHP_SELF']);
  

?>

<!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "229023787475792");
      chatbox.setAttribute("attribution", "biz_inbox");
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v10.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

<!--Header Start-->
<header  data-spy="affix" data-offset-top="1" class="clearfix">
    <section class="toolbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-offset-6">
                    <ul class="right-none pull-right company_info">
                        <li class="address"><a href="contact-us"><i class="fa fa-map-marker"></i>  MUM Sports 41431 Albrae Street, Fremont, CA</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="toolbar_shadow"></div>
    </section>
    <div class="bottom-header" >
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid"> 
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a class="navbar-brand" href="https://www.mumsports.com">
                            <span class="logo">
                            <img src="images/logo-main.png" alt="logo">
                            </span>
                            </a>
                            </div>
                    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav pull-right">

                        <?php 
                            $directoryURI = $_SERVER['REQUEST_URI'];
                            $path = parse_url($directoryURI, PHP_URL_PATH);
                            $components = explode('/', $path);
                            $first_part = $components[1];
                            
                            $services = '';
                            $gallery = '';
                            $contact = '';
                            $ceramicpro = '';
                            $paint = '';
                            $protection = '';
                            $detailing = '';
                            $calipers = '';
                            $tinting = '';
                            $coating = '';
                            $photos = '';
                            $videos = '';
                            $testimonials = '';
                          
                            if ($first_part == "ceramicpro-inner") {
                                $services = 'active';
                                $ceramicpro = 'active';
                             }
                             else if($first_part == "paint-protection-film"){
                                $services = 'active';
                                $paint = 'active';
                             }
                             else if($first_part == "auto-detailing"){
                                $services = 'active';
                                $detailing = 'active';
                            }
                            else if($first_part == "chrome-delete-protection"){
                                $services = 'active';
                                $protection = 'active';
                            }
                            else if($first_part == "calipers-paint"){
                                $services = 'active'; 
                                $calipers = 'active';
                            }
                            else if($first_part == "window-tinting"){
                                $services = 'active';
                                $tinting = 'active';  
                            }
                            else if($first_part == "powder-coating-wheels"){
                                $services = 'active';
                                $coating = 'active';
                            }
                             else if($first_part == "photos"){
                                $gallery = 'active';
                                $photos = 'active';
                             }
                             else if($first_part == "videos"){
                                $gallery = 'active';
                                $videos = 'active';
                             }
                             else if($first_part == "testimonials"){
                                $contact = 'active';
                                $testimonials = 'active';
                             }
                             else if($first_part == "contact-us"){
                                $contact = 'active';
                             }
                            
                        ?>
                       
                            
                            <li class="<?php if ($first_part=="") {echo "active"; } ?>"><a href="https://www.mumsports.com">Home</a></li>
                            <li class="dropdown <?php echo $services; ?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="<?php echo $ceramicpro; ?>"><a href="ceramicpro-inner">Ceramic Pro</a></li>
                                    <li class="<?php echo $paint; ?>"><a href="paint-protection-film">Paint Protection Film</a></li>
                                    <li class="<?php echo $detailing; ?>"><a href="auto-detailing">Auto Detailing</a></li>
                                    <li class="<?php echo $protection; ?>"><a href="chrome-delete-protection">Chrome Delete</a></li>
                                    <li class="<?php echo $calipers; ?>"><a href="calipers-paint">Caliper Paint</a></li>
                                    <li class="<?php echo $tinting; ?>"><a href="window-tinting">Window Tinting</a></li>
                                    <li class="<?php echo $coating; ?>"><a href="powder-coating-wheels">Powder Coating Wheels</a></li>
                                </ul>
                            </li>
                            <li class="dropdown <?php echo $gallery; ?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="<?php echo $photos; ?>"><a href="photos">Photos</a></li>
                                    <li class="<?php echo $videos; ?>"><a href="videos">Videos</a></li>
                                </ul>
                            </li>
                            <li><a href="blog">Blog</a></li>
                            <li class="dropdown <?php echo $contact; ?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact Us <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class=""><a href="contact-us">Contact Us</a></li>
                                    <li class="<?php echo $testimonials; ?>"><a href="testimonials">Testimonials</a></li>
                                </ul>
                            </li>
                            <li class="phone-nav"><a href="tel:5106573224">(510) 657-3224</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse --> 
                </div>
                <!-- /.container-fluid --> 
            </nav>
        </div>
        <div class="header_shadow"></div>
    </div>
</header>
<!--Header End-->