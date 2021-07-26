<?php 
       include("connect.php");
      
?>
<?php
  //session_start();
  $sid=session_id();
  $sel=mysql_query("select * from visitor where sid='$sid'")or die(mysql_error());
  $val=mysql_fetch_array($sel);
  $time=time();
  if(!$val){
  mysql_query("insert into visitor set sid='$sid', fvisit='$time',lvisit='$time',visits='1',online='1',name='Unknown',clicks='1'") or die(mysql_error());
  }else{
     mysql_query("update visitor set lvisit='$time',visits='1',online='1',clicks=clicks+1") or die(mysql_error());
  }
?>
<!doctype html>

<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ======= titles ======= -->
    <title>Excellence associates | Excellence associates Uganda | Schoolaeships and fellowships | consultancy in Uganda | academic research | EA Uganda </title>
    <meta name="Excellence associates Uganda" content="">
    <meta name="keywords" content="Research in Africa, Excellence associates, Schoolaeships and fellowships, consultancy in Uganda, academic research, ea Uganda">
    
    <meta name="Eyeeza ICT Solutions" content="Excellence associates Uganda">
    <!-- ======= favicon ======= -->
    <link rel="icon" type="image/png" href="favicon.png">
    <!-- ======= google fonts ======= -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800" rel="stylesheet">
    <!-- ======= all css ======= -->
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- hover css -->
    <link rel="stylesheet" href="css/hover-min.css">
    <!-- lightbox css -->
    <link rel="stylesheet" href="css/lightbox.min.css">
    <!-- wmBox css -->
    <link rel="stylesheet" href="css/wmBox.css">
    <!-- normalize css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- jquery-ui css -->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/main.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <script src="form.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar">
  
    <header class="header-area">
        <!-- header top -->
        <div class="header-top" id="top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="top-info">
                            <!-- head info -->
                            <ul class="top-bar-text">
                                <li><i class="fa fa-phone" aria-hidden="true"></i>+256(0)392146400</li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@eauganda.com">info@eauganda.com</a></li>
                            </ul>
                            <!-- /.head info -->
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="top-info text-right">
                            <!-- social part -->
                            <ul class="top-bar-text social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                            <!-- /.social part -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.header top -->
        <!-- header menu -->
        <div class="header-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-4 col-xs-4">
                        <!-- logo part -->
                        <div class="logo">
                            <a href="#">
                                <img src="img/logo.png" alt="" style="width: 100%">
                            </a>
                        </div>
                        <!-- /.logo part -->
                    </div>
                    <div class="col-sm-10 col-xs-8">
                        <!-- menu part -->
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse main-menu" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a class="nav-link" href="#top">home</a></li>
                                        <li><a class="nav-link" href="#services">service</a></li>
                                        <li><a class="nav-link" href="#about">about</a></li>
                                        <li><a class="nav-link" href="#team">Team</a></li>
                                        <li><a class="nav-link" href="#portfolio">portfolio</a></li>
                                       
                                       
                                        <li><a class="nav-link" href="#contact">contact</a></li>
                                    </ul>
                                </div>
                                <!-- /.navbar-collapse -->
                            </div>
                        </nav>
                        <!-- /.menu part -->
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /.header menu -->
    </header>
    <!--
        =====================
        Header Part End
        =====================
    -->
            
    <!--
        =====================
        slider Part start
        =====================
    -->
   <section class="slider-area">
        <div class="slider-wraper owl-carousel">

              <?php
                $slider=mysql_query("select * from photo where category='slider' ")or die(mysql_error());
                $sliders = -1;
                
               while($slider2=mysql_fetch_array($slider)){
                   ?>
            <div class="single-slider  parallax" style="background-image: url('img/slider/<?php echo $slider2['photo_name']; ?>')">
                <div class="slider-table">
                    <div class="slider-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-7 col-sm-offset-0">
                                    <!-- single slider content -->

                                    <div class="slider-info" >
                                        <h2 ><?php echo $slider2['title']; ?></h2>
                                        <!--
                                        <p ><?php echo $photo_comment1;?></p>
                                        -->
                                    </div>
                                    <!-- /.single slider content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.single slider -->

                   <?php
               

               }
                    ?>
            <!-- single slider -->
            


            
            
        </div>
    </section>
    <!--
        =====================
        slider Part end
        =====================
    -->
 
    
    <!--
        =====================
        Service Area Start
        =====================
    -->
    <section id="services" class="service-area " style="padding-top: 50px">
        <div class="container">
            <div class="row">
                <?php
                $slider=mysql_query("select * from photo where category='services' ")or die(mysql_error());
                $sliders = -1;
                
               while($slider2=mysql_fetch_array($slider)){
                $sliders++;

               
                 if($sliders==3){
                   
                    $service_title4 = $slider2['title'];
                    $service_comment4 = $slider2['comment'];

                }
               

               }
                    ?>
                <div class="col-sm-8 col-sm-offset-2">
                    <!-- section heading -->
                    <div class="bold-heading">
                        <h2><span>our</span> services</h2>
                        <p><?php echo $service_comment4; ?></p>
                    </div>
                    <!-- /.section heading -->
                </div>
            </div>
            <!-- Single Service Part Start -->

            <div class="row">
                <?php
                $sel=mysql_query("select * from photo where category='services' ")or die(mysql_error());
               while($val=mysql_fetch_array($sel)){
                    ?>
               
                <div class="col-sm-6 col-md-4" >
                    <!-- Single Service -->
                    <div class="single-service-part" style="height: 450px;padding: 10px">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        <h3><?php echo $val['title']?></h3>
                        <p><?php echo $val['comment']?> </p>
                    </div>
                    <!-- /.Single Service -->
                </div>
                <?php
            }
                ?>
                
                
            </div>
            <!-- Single Service Part End -->
        </div>
    </section>
    <!--
        =====================
        Service Area End
        =====================
    -->

    <!--
        =====================
        About Us Area Start
        =====================
    -->
    <section id="about" class="about-us-area " style="padding-top: 50px">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <?php
                $slider=mysql_query("select * from photo where category='about' ")or die(mysql_error());
                $sliders = -1;
                
               while($slider2=mysql_fetch_array($slider)){
                $sliders++;

                if($sliders==0){
                   
                    $about_title1 = $slider2['title'];
                    $about_comment1 = $slider2['comment'];


                }
                if($sliders==1){
                    
                    $about_title2 = $slider2['title'];
                    $about_comment2 = $slider2['comment'];

                }
                if($sliders==2){
                    
                    $about_title3 = $slider2['title'];
                    $about_comment3 = $slider2['comment'];

                }
                if($sliders==3){
                    
                    $about_title4 = $slider2['title'];
                    $about_comment4 = $slider2['comment'];

                }
               

               }
                    ?>
                    <!-- section heading -->
                    <div class="bold-heading">
                        <h2>about <span>us</span></h2>
                        <p><?php echo $about_comment1; ?></p>
                    </div>
                    <!-- /.section heading -->
                </div>
            </div>
        </div>
        <div class="about-us-content">
            <!-- about content left -->
            <div class="about-us-content-left">
                <div class="about-content">
                    <i class="fa fa-codepen" aria-hidden="true"></i>
                    <h3><?php echo $about_title2; ?></h3>
                    <p><?php echo $about_comment2; ?></p>
                </div>
                <div class="about-content">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                     <h3><?php echo $about_title3; ?></h3>
                    <p><?php echo $about_comment3; ?></p>
                </div>
                <div class="about-content">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                     <h3><?php echo $about_title4; ?></h3>
                    <p><?php echo $about_comment4; ?></p>
                </div>
            </div>
            <!-- /.about content left -->
            <!-- about content right -->
            <div class="about-us-content-right">
                <div class="single-about">
                    <!-- video -->
                    <div class="about-video parallax">
                       
                    </div>
                    <!-- /.video -->
                </div>
            </div>
            <!-- /.about content right -->
        </div>
    </section>
    <!--
        =====================
        About Us Area End
        =====================
    -->

    <!--
        =====================
        Team Area Start
        =====================
    -->
   <section class="team-members-area section-padding" id="team">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!-- section title -->
                    <div class="bold-heading">
                        <h2><span>Meet</span> The Team</h2>
                       
                    </div>
                    <!-- /.section title -->
                </div>
            </div>
            <div class="row">
                 <?php
                $slider=mysql_query("select * from photo where category='team' ")or die(mysql_error());
                //$sliders = -1;
                
               while($val=mysql_fetch_array($slider)){
                ?>
                 <!-- single project -->
                        
                        <div  class="col-lg-4 col-md-4 col-sm-6" >
                          <center>
                        
                        <div class="single-member-dec">
                        <img src="img/team/thumb/<?php echo $val['thumb_nail']?>" alt="" class="" data-toggle="modal" data-target="#<?php echo $val['photo_id']; ?>" style="width: 100%">
                        
                        <div class="member-overly text-center">
                            <h3><?php echo $val['title']?></h3>
                            <p>&nbsp;</p>
                            
                           <!-- <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>-->
                        </div>
                    </div>
                        <div class="modal fade" id="<?php echo $val['photo_id']; ?>" role="dialog" style="padding-top: 100px;background: rgba(184,134,11,0.0)">
                                 <div class="modal-dialog modal-lg" style="background: #fff">
                                   <div class="modal-content">
                                   
                                  
          
                                  
                             <div class="modal-body" style="background-image: url('bg.jpg');">
                              <div class="row" >
                             <div class="col-md-5" style="padding: -10px;margin: -10px"><img src="img/team/<?php echo $val['photo_name']; ?>" alt="" style="max-width: 100%;border-radius: 3px" /></div>
                             <div class="col-md-7" style="padding: 5px;margin: -10px;padding-right: 10px;padding-left: 0px;margin-top: 10px;background: #2b56c6;margin-left: -6px;border-radius: 0px">
                                  
                             
                            <p style="margin: 0px;padding: 10px" align="left"><h4 style="color: #fff;padding: 10px"><?php echo $val['title']; ?></h4></p>
                            <hr style="margin: 10px;padding: 0px"/>
                            <div class="text" style="margin: 0px;padding: 0px;padding-top: 10px">
                                <p style="text-align: left;font-size: 15px;line-height: 17px;font-family: Arial, Helvetica, sans-serif;color:  #fff;padding-left: 20px;padding-right: 15px">
                                    <?php echo $val['comment']; ?>
 </p>
                              
                              
                              </div>
                              </div>
                               

                           </div>
                           
                          </div>
                        </div>
                               </div>
                        
                        </div>
                        </center>

                    
                </div>


                <?php

               }
                    ?>



             
                
                
               
               
 

            </div>
        </div>
    </section>
    <!--
        =====================
        Team Area End
        =====================
    -->

    <!--
        =====================
        Portfolio Area Start
        =====================
    -->
    <section id="portfolio" class="portfolio-area " style="padding-top: 50px">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!-- section title -->
                    <div class="bold-heading">
                        <h2><span>our</span> Research</h2>
                        <p>E.A constitutes of a multidisciplinary team of
research professionals, with rich intellectual diversity, global networks, experience and
tested confidentiality.</p>
                    </div>
                    <!-- /.section title -->
                </div>
            </div>
            <div class="row">
                <div class="iso-wraper">
                    <!-- Portfolio Menu -->
                   
                    <!-- /.Portfolio Menu -->

                    <!-- Portfolio content -->
                    <div class="iso-content">
                                      <?php
                $slider=mysql_query("select * from photo where category='works' ")or die(mysql_error());
                //$sliders = -1;
                
               while($slider2=mysql_fetch_array($slider)){
                ?>
                 <!-- single project -->
                        
                        <div class="col-md-4 iso-item design networking" >
                          <center>
                        <div class="img-holder containers single-project" >
                            
                            <img src="img/works/<?php echo $slider2['photo_name']; ?>" alt="" class="btn btn-lg image" data-toggle="modal" data-target="#<?php echo $slider2['photo_id']; ?>" style="max-width: 100%">
                        <div class="middle btn btn-lg image" data-toggle="modal" data-target="#<?php echo $slider2['photo_id']; ?>">
                              <div class="text">
                               
                                        
                          </div>
                            
                            </div>
                            
                        </div>
                        <div class="modal fade" id="<?php echo $slider2['photo_id']; ?>" role="dialog" style="padding-top: 100px;background: rgba(184,134,11,0.8)">
                                 <div class="modal-dialog modal-lg" style="background: #fff">
                                   <div class="modal-content">
                                   
                                  
          
                                  
                             <div class="modal-body" >
                              <div class="row" >
                             <div class="col-md-5" style="padding: -10px;margin: -10px"><img src="img/works/<?php echo $slider2['photo_name']; ?>" alt="" style="max-width: 100%;" /></div>
                             <div class="col-md-7" style="padding: -10px;margin: -10px;padding-right: 10px;padding-left: 30px;margin-top: 10px">
                                  
                             
                            <p style="margin: 0px;padding: 0px" align="left"><h4><?php echo $slider2['title']; ?></h4></p>
                            <hr style="margin: 0px;padding: 0px"/>
                            <div class="text" style="margin: 0px;padding: 0px;padding-top: 10px">
                                <p style="text-align: left;font-size: 15px;line-height: 17px;font-family: Arial, Helvetica, sans-serif;color:  #666;">
                                    <?php echo $slider2['comment']; ?>
 </p>
                              
                              
                              </div>
                              </div>
                               

                           </div>
                           
                          </div>
                        </div>
                               </div>
                        
                        </div>
                        </center>

                    
                </div>


                <?php

               }
                    ?>

                       
                     
                        
                    </div>
                    <!-- /.Portfolio content -->
                </div>
            </div>
        </div>
    </section>
   
    <!--
        ==============================
        Skill Progress Area Start
        ==============================
    -->
    <section class="progress-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 clearfix">
                    <!-- progress circle -->
                    <div class="progress-circle">
                        <div class="third circle">
                            <strong></strong>
                            <h3>Clients’ confidentiality</h3>
                        </div>
                    </div>
                    <!-- /.progress circle -->
                    <!-- progress circle -->
                    <div class="progress-circle">
                        <div class="third circle">
                            <strong></strong>
                            <h3>Professionalism</h3>
                        </div>
                    </div>
                    <!-- /.progress circle -->
                    <!-- progress circle -->
                    <div class="progress-circle">
                        <div class="third circle">
                            <strong></strong>
                            <h3>Timeliness</h3>
                        </div>
                    </div>
                    <!-- /.progress circle -->
                </div>
                
            </div>
        </div>
    </section>

   
    <!--
		============================
		contact us part star
		============================
	-->
    <section class="contact-area section-padding" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!-- section title -->
                    <div class="bold-heading">
                        <h2><span>contact</span> us</h2>
                        <p>Get to Us, we are here to serve you.</p>
                    </div>
                    <!-- /.section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <!-- contact form content -->
                    <div class="contact-form-area">
                        <!-- contact form -->
                        <div class="contact-form">
                            <form  action="" method="POST">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-content">
                                            <input name="name" placeholder="YOUR NAME" class="form-control" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-content">
                                            <input name="email" placeholder="YOUR EMAIL" class="form-control" required="" type="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-content">
                                            <input name="phone" placeholder="Phone Number" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-content">
                                            <input name="subject" placeholder="Subject" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-message">
                                            <textarea class="field-element form-control" data-gramm="true" spellcheck="false" data-gramm_editor="true" name="message" placeholder="Message" required=""></textarea>
                                        </div>
                                        <button type="submit" name="submit" class="bold-btn sent-button hvr-rectangle-out">SEND <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.contact form -->
                    </div>
                    <?php 
     if (empty($_POST['name']) &&empty($_POST["email"])&&empty($_POST['message'])&&empty($_POST['subject']) &&empty($_POST['phone'])) {
         
        echo "All fields are required";
        
        }
    else{
       $name=$_POST['name'];
       $phone=$_POST['phone'];
                
       $email=$_POST['email'];
       $subject=$_POST['subject'];
       $message=$_POST['message'];
       $information = "Phone Number"."\t".$phone."\n"."Subject"."\t".$subject."\n"."Comment"."\t".$message;  
        $from="From: $name<$email>\r\nReturn-path: $email";
        
        mail("info@eauganda.com", $subject, $information, $from);
        echo "Your Email has sent!";
        
        ?>
        
        <?php
        }
     
     
     ?>
                    <!-- /.contact form content -->
                </div>
                <div class="col-md-5">
                    <!-- support info -->
                    <div class="contact-info-content">
                        <h2>Get In Touch</h2>
                        <p>Send us an email, we shall get back to you as soon as possible</p>
                        <div class="address-info">
                            <ul>
                                <li><span><i class="fa fa-map-marker" aria-hidden="true"></i> address</span>P.O.Box 2526 kampala, Uganda</li>
                                <li><span><i class="fa fa-envelope" aria-hidden="true"></i> email</span><a href="mailto:info@eauganda.com">info@eauganda.com</a></li>
                                <li><span><i class="fa fa-phone" aria-hidden="true"></i> phone</span><a href="#">+256(0)392146400</a></li>
                                <li><span><i class="fa fa-calendar" aria-hidden="true"></i> business days and time</span>Monday-Saturday (9am - 5pm) </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.support info -->
                </div>
            </div>
        </div>
    </section>
    <!--
		============================
		contact us part end
		============================
	-->

    <!--
		============================
		Google map part start
		============================
	-->
    <div class="google-map-area">
        <div ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6937197569046!2d32.61083351425393!3d0.4528164996696441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177db3b2204ed84b%3A0x478bb2dd36debb8!2sExcellence+Associates+Uganda!5e0!3m2!1sen!2sug!4v1529571737061" height="450" frameborder="0" style="border:0;width: 100%" allowfullscreen></iframe></div>
        
    </div>
    <!--
		============================
		Google map part end
		============================
	-->

    <!--
		============================
		Footer Area Start
		============================
	-->
    <footer class="footer-area">
        <div class="top-footer-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <!-- footer widget -->
                        <div class="footer-widget">
                            <h2>about <span>Us</span></h2>
                            <p>Excellence Associates (E.A) is a privately owned research, academic and consultancy
international firm based in Uganda. It was established in 2015 and formally registered in
2017 under the Uganda Registration Services Bureau (URSB no.) in accordance with
the constitution of the Republic of Uganda.</p>
                        </div>
                        <!-- /.footer widget -->
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- footer widget -->
                        <div class="footer-widget">
                            <h2>Quick Links</h2>
                            <ul>
                                 <li><a class="nav-link" href="#services">service</a></li>
                                <li><a class="nav-link" href="#about">about</a></li>
                                        
                                <li><a class="nav-link" href="#portfolio">portfolio</a></li>
                            </ul>
                        </div>
                        <!-- /.footer widget -->
                    </div>
                   
                   
                </div>
            </div>
        </div>
        <div class="main-footer-area">
            <div class="container">
                <!-- copy right -->
                <div class="row">
                    <div class="col-sm-7">
                        <div class="copy-right">
                            <p>Copyright <span>&copy;</span>2018. All rights reserved. </p>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="copy-right text-right">
                            <p>Created by: <a href="eyeeza.com" target="_blank">| Eyeeza |</a></p>
                        </div>
                    </div>
                </div>
                <!-- /.copy right -->
            </div>
        </div>
    </footer>
    <!--
		============================
		Footer Area End
		============================
	-->

    <!-- ======= All js ======= -->
    <!-- modernizr js -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- jQuery min js -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- jarallax js -->
    <script src="js/jarallax.min.js"></script>
    <!-- isotope js -->
    <script src="js/isotope.min.js"></script>
    <!-- lightbox js -->
    <script src="js/lightbox.min.js"></script>
    <!-- wmBox js -->
    <script src="js/wmBox.js"></script>
    <!-- counterup js -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- waypoints js -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- circle progress js -->
    <script src="js/circle-progress.js"></script>
    <!-- barfiller js -->
    <script src="js/jquery.barfiller.js"></script>
    <!-- jquery-ui js -->
    <script src="js/jquery-ui.js"></script>
    <!-- scrollUp js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- google map js -->
    
   
    <!-- main js -->
    <script src="js/main.js"></script>

</body>

</html>
