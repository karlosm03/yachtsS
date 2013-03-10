<!DOCTYPE html>
<html>
<head>
	<title>Yacht Services - Home -</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38945966-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    
<!--Includes-->
    
    <?php  
			include_once ('includes/configure.php'); //incluye la configuracion del sitio
			include_once (DIR_F_MODULES.'head.php'); //incluye los links de styles
	?>
  
    <!--end includes-->
 
  
</head>	



<body class="pull_top">
    <div class="navbar transparent navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="index.html">
                <img src="<?php echo DIR_F_IMG.'/logo-header.png'; ?> "/>
               
                
            </a>
             
            <div class="nav-collapse collapse">
                <!--Aqui insertamos el menu de navegacion-->
                <?php   include_once (DIR_F_VIEWS.'/menu.php');  ?>
                <!-- fin del menu de navegcion-->
            </div>
        </div>
      </div>
    </div>

    <section id="feature_slider" class="">
        <!-- 
            Each slide is composed by <img> and .info
            - .info's position is customized with css in index.css
            - each <img> parallax effect is declared by the following params inside its class:
            
            example: class="asset left-472 sp600 t120 z3"
            left-472 means left: -472px from the center
            sp600 is speed transition
            t120 is top to 120px
            z3 is z-index to 3
            Note: Maintain this order of params

            For the backgrounds, you can combine from the bgs folder :D
        -->
        <article class="slide" id="showcasing" style="background: url('<?php echo DIR_F_IMG.'/backgrounds/bg1.jpg'; ?>') repeat-x top center;">
            <img class="asset left-30 sp600 t120 z1" src='<?php echo DIR_F_IMG.'dealers.png'; ?>' />
            <div class="info">
                <h2>Yachts services in Puerto Vallarta.</h2>
            </div>
        </article>
        <article class="slide" id="responsive" style="background: url('<?php echo DIR_F_IMG.'/backgrounds/bg2.jpg'; ?>') repeat-x top center;">
            <div class="info">
                <h2>Our staff is trained to the highest standards of quality.</h2>
            </div>
            <!--<img class="asset left-480 sp600 t260 z1" src="img/slides/scene2/left.png" />
            <img class="asset left-210 sp600 t213 z2" src="img/slides/scene2/middle.png" />
            <img class="asset left60 sp600 t260 z1" src="img/slides/scene2/right.png" />-->
        </article>
        <article class="slide" id="tour" style="background: url('<?php echo DIR_F_IMG.'/backgrounds/bg3.jpg'; ?>') repeat-x top center;">
           <!-- <img class="asset left-472 sp650 t210 z3" src="img/slides/scene3/ipad.png" />
            <img class="asset left-365 sp600 t270 z4" src="img/slides/scene3/iphone.png" />
            <img class="asset left-350 sp450 t135 z2" src="img/slides/scene3/desktop.png" />
            <img class="asset left-185 sp550 t220 z1" src="img/slides/scene3/macbook.png" />-->
            <div class="info">
                <h2>Intelligent and innovative solutions</h2>
                <a href="#">TOUR SERVICES</a>
            </div>
        </article>
        <!--<article class="slide" id="responsive" style="background: url('<?php //echo DIR_F_IMG.'test.jpg'; ?>') repeat-x top center;">
            <img class="asset left-472 sp600 t120 z3" src="img/slides/scene4/html5.png" />
            <img class="asset left-190 sp500 t120 z2" src="img/slides/scene4/css3.png" />
            <div class="info">
                <h2>
                    Responsive <strong>HTML5 & CSS3</strong>
                    Theme
                </h2>                
            </div>
        </article>        -->
    </section>


    <div id="features">
        <div class="container">
            <div class="section_header">
                <h3>Features</h3>
            </div> 
            <div class="row feature">
                <div class="span6">
                    <img src="img/showcase1.png" />
                </div>
                <div class="span6 info">
                    <h3>
                        <img src="img/features-ico1.png" />
                        High Technology
                    </h3>
                    <p>To get closer to our customers, we have used the best in web technology with a design that allows you to visit us from any mobile device with the use of social networks we listen to your needs to serve you better.
                    </p>
                </div>
            </div>
            <div class="row feature ss">
                <div class="span6 info">
                    <h3>
                        <img src="img/features-ico2.png" />
                        Constant Communication
                    </h3>
                    <p>
                        Communication with our clients is our mission every day, enabling us to improve our services and give our customers a high quality finished product that exceeds your expectations. This uns maintain constant communication with our customers using the means necessary to keep them informed of the status of their service.
                    </p>
                </div>
                <div class="span6">
                    <img src="img/showcase2.jpg" class="pull-right" />
                </div>
            </div>
            <div class="row feature ss">
                <div class="span6">
                    <img src="img/showcase3.jpg" />
                </div>
                <div class="span6 info">
                    <h3>
                        <img src="img/features-ico3.png" />professional crew</h3>
                    <p>
                       With Yachts Services is in good hands, we have the most qualified and experienced personnel to perform each job required the most professional manner, and with the assurance that their work was supervised to the smallest detail. Ongoing training and technology that allows us to get our staff to deliver a high quality service.
                    </p>
                </div>
            </div>
        </div>
    </div>
   <!-- <div id="clients">
        <div class="container">
            <div class="section_header">
                <h3>Clients</h3>
            </div>
            <div class="row">
                <div class="span2 client">
                    <div class="img client1"></div>
                </div>
                <div class="span2 client">
                    <div class="img client2"></div>
                </div>
                <div class="span2 client">
                    <div class="img client3"></div>
                </div>
                <div class="span2 client">
                    <div class="img client1"></div>
                </div>
                <div class="span2 client">
                    <div class="img client2"></div>
                </div>
                <div class="span2 client">
                    <div class="img client3"></div>
                </div>
            </div>
        </div>
    </div>-->

    <!-- starts footer -->
    <footer id="footer">
        <div class="container">
            <div class="row sections">
                <!--<div class="span4 recent_posts">
                    <h3 class="footer_header">
                        Recent Posts
                    </h3>
                    <div class="post">
                        <a href="blogpost.html">
                            <img src="img/recent_post1.png" class="img-circle" />
                        </a>
                        <div class="date">
                            Wed, 12 Dec
                        </div>
                        <a href="blogpost.html" class="title">
                            Randomised words which don't look embarrasing hidden.
                        </a>
                    </div>
                    <div class="post">
                        <a href="blogpost.html">
                            <img src="img/recent_post2.png" class="img-circle" />
                        </a>
                        <div class="date">
                            Mon, 12 Dec
                        </div>
                        <a href="blogpost.html" class="title">
                            Randomised words which don't look embarrasing hidden.
                        </a>
                    </div>
                </div>
                <div class="span4 testimonials">
                    <h3 class="footer_header">
                        Testimonials
                    </h3>
                    <div class="wrapper">
                        <div class="quote">
                            <span>"</span>
                            There are many variations of passages of randomised words which don't look even slightly believable. You need to be sure there isn't anything embarrassing of text.
                            <span></span>
                        </div>
                        <div class="author">
                            <img src="img/user-display.png" />
                            <div class="name">Alejandra Galvan Castillo</div>
                            <div class="info">
                                Details Canvas
                            </div>
                        </div>
                    </div>
                </div>-->
                <div class="span4 contact">
                    <h3 class="footer_header">
                        Contact
                    </h3>
                    <table><tr><td>
                    <form action="#" method="post">
                        <input type="text" placeholder="Your name" />
                        <input type="text" placeholder="Your email" />
                        <textarea rows="3" placeholder="Message"></textarea>
                        <input type="submit" value="Send" />
                    </form>
                    </td></tr></table>
                </div>
            </div>
            <div class="row credits">
                <div class="span12">
                    <div class="row social">
                        <div class="span12">
                            <a href="#" class="facebook">
                                <span class="socialicons ico1"></span>
                                <span class="socialicons_h ico1h"></span>
                            </a>
                            <a href="#" class="twitter">
                                <span class="socialicons ico2"></span>
                                <span class="socialicons_h ico2h"></span>
                            </a>
                            <a href="#" class="gplus">
                                <span class="socialicons ico3"></span>
                                <span class="socialicons_h ico3h"></span>
                            </a>
                            <a href="#" class="flickr">
                                <span class="socialicons ico4"></span>
                                <span class="socialicons_h ico4h"></span>
                            </a>
                            <a href="#" class="pinterest">
                                <span class="socialicons ico5"></span>
                                <span class="socialicons_h ico5h"></span>
                            </a>
                            <a href="#" class="dribble">
                                <span class="socialicons ico6"></span>
                                <span class="socialicons_h ico6h"></span>
                            </a>
                            <a href="#" class="behance">
                                <span class="socialicons ico7"></span>
                                <span class="socialicons_h ico7h"></span>
                            </a>
                        </div>
                    </div>
                    <div class="row copyright">
                        <div class="span12">
                            © 2013 Yachts Services. All rights reserved. SD7 studio.
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>

    <script type="text/javascript" src="js/index-slider.js"></script>	
</body>
</html>