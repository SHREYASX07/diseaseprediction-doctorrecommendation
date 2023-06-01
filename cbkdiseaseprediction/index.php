<!DOCTYPE HTML>
<html class="no-js">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Disease Prediction</title>

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>
<meta name="format-detection" content="telephone=no"/>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="plugins/sequence/css/sequence.html" rel="stylesheet" type="text/css"/>
<link href="plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
<link href="plugins/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css"/>
<link href="plugins/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="plugins/rs-plugin/css/settings.css" media="screen" />

<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie8.css" media="screen" /><![endif]-->


<link class="alt" href="colors/blue.css" rel="stylesheet" type="text/css"/>

<script src="js/modernizr.js"></script>
<?php
require_once "healthhelper.php";
$helper = new HealthHelper();
?>
</head>
<body class="boxed"  style="background-image: url('images/backgrounds/images/img3.jpg'); background-repeat: no-repeat; background-size: cover;">
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]--> 
<!-- Start Body Container -->

<div class="body footer-style2"> 
  <!-- Start Header -->
  <?php
    require_once "header.php";
  ?>
  <!-- End Header --> 
  
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="rev-slider-container">
        <div class="tp-banner-container">
          <div class="tp-banner" >
            <ul>
              <!-- SLIDE  -->
              <li data-delay="4000" data-masterspeed="600" data-slotamount="7" data-transition="scaledownfromtop"> 
                <!-- MAIN IMAGE --> 
                <img src="images/slide1.jpg" alt=""> 
              </li>
              
              <li data-delay="4000" data-masterspeed="600" data-slotamount="7" data-transition="scaledownfromtop"> 
                <!-- MAIN IMAGE --> 
                <img src="images/slide2.jpg" alt=""> 
              </li>
              
              
            </ul>
          </div>
        </div>
      </div>
      
      <div class="featured-row dgray-color margin-20">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>Welcome to Disease Prediction.</h2>
              <a href="start_checkup.php" class="btn btn-primary">Start Checkup</a> </div>
          </div>
        </div>
      </div>
      
      <div class="container margin-30">
        <div class="row">
          <div class="col-md-12 text-align-center">
            <h2>About Us</h2>
            <h4 class="heading-hr no-strong accent-color-text margin-50"><span>Few words That Helps To Understand</span></h4>
          </div>
          <div class="col-md-4 col-sm-4">
            <p class="drop-caps">The aim of this study is to develop a disease prediction and doctor recommendation system using machine learning techniques. The proposed system will analyze the patient's medical history, symptoms, and other relevant information to predict the likelihood of various diseases. Based on the predicted disease, the system will recommend a list of doctors specialized in the relevant field. The system will use a large dataset of patient medical records to train and validate the machine learning model. The proposed system has the potential to improve healthcare outcomes by providing timely and accurate disease predictions, as well as recommending the most appropriate doctors for patients.</p>
          </div>
          <div class="col-md-4 col-sm-4">
            <p>Disease prediction and doctor recommendation systems are a rapidly growing area of healthcare technology, leveraging the power of machine learning to improve the accuracy and efficiency of medical diagnosis and treatment. By analyzing patient data and symptoms, these systems can predict the likelihood of various diseases and recommend specialized doctors for treatment. Such systems have the potential to revolutionize healthcare delivery by improving patient outcomes, reducing healthcare costs, and enhancing the overall patient experience.</p>
          </div>
          <div class="col-md-4 col-sm-4"> 
            <!-- Start Accordion -->
            <div class="accordion" id="accordionArea">
              <div class="accordion-group panel">
                <div class="accordion-heading accordionize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#oneArea"> Our Vision <i class="fa fa-angle-down"></i> </a> </div>
                <div id="oneArea" class="accordion-body collapse">
                  <div class="accordion-inner"> 
The vision for the disease prediction and doctor recommendation system is to create a healthcare ecosystem that is predictive, proactive, and patient-centric. By leveraging the latest advances in machine learning and artificial intelligence, this system aims to enable doctors to make more accurate diagnoses, reduce misdiagnosis rates, and improve patient outcomes. Furthermore, the system aims to empower patients by providing them with personalized disease predictions and recommendations for specialized doctors, thus enabling them to take control of their health and make informed decisions about their treatment. Ultimately, the goal is to transform the healthcare industry by delivering more efficient, effective, and patient-centered care.</div>
                </div>
              </div>
              <div class="accordion-group panel">
                <div class="accordion-heading accordionize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#twoArea"> Our Philosophy <i class="fa fa-angle-down"></i> </a> </div>
                <div id="twoArea" class="accordion-body collapse">
                  <div class="accordion-inner"> The philosophy behind the disease prediction and doctor recommendation system is based on the principles of personalized medicine and patient-centered care. The system is designed to leverage the power of machine learning to provide tailored disease predictions and doctor recommendations based on individual patient data, symptoms, and medical history. The system aims to facilitate more accurate diagnoses, reduce misdiagnosis rates, and provide patients with access to the most suitable doctors for their condition. Furthermore, the system emphasizes the importance of patient autonomy, by empowering patients to take control of their health and make informed decisions about their treatment. The ultimate goal is to improve the quality of healthcare delivery by providing more accurate, personalized, and patient-centered care.</div>
                </div>
              </div>
              <div class="accordion-group panel">
                <div class="accordion-heading accordionize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#threeArea"> Our Mission <i class="fa fa-angle-down"></i> </a> </div>
                <div id="threeArea" class="accordion-body collapse">
                  <div class="accordion-inner"> The vision for the disease prediction and doctor recommendation system is to create a healthcare ecosystem that is predictive, proactive, and patient-centric. By leveraging the latest advances in machine learning and artificial intelligence, this system aims to enable doctors to make more accurate diagnoses, reduce misdiagnosis rates, and improve patient outcomes. Furthermore, the system aims to empower patients by providing them with personalized disease predictions and recommendations for specialized doctors, thus enabling them to take control of their health and make informed decisions about their treatment. Ultimately, the goal is to transform the healthcare industry by delivering more efficient, effective, and patient-centered care.</div>
                </div>
              </div>
            </div>
            <!-- End Accordion --> 
          </div>
        </div>
      </div>   
      
    </div>
  </div>
  
  <?php
  require_once "footer.php";
  ?>
  </div>
<!-- End Body Container --> 
<script src="js/jquery-latest.min.js"></script> <!-- Jquery Library Call --> 
<script src="plugins/prettyphoto/js/prettyphoto.js"></script> 
<script src="plugins/owl-carousel/js/owl.carousel.min.js"></script> 
<script src="plugins/page-scroller/jquery.pagescroller.js"></script> 
<script src="js/helper-plugins.js"></script> <!-- Plugins --> 
<script src="js/bootstrap.js"></script> <!-- UI --> 
<script src="js/init.js"></script> <!-- All Scripts --> 
<script src="plugins/rs-plugin/js/jquery.themepunch.plugins.min.js"></script> 
<script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
<script src="js/revolution-slider-init.js"></script> <!-- Revolutions Slider Intialization --> 
<!-- Preloader --> 
<script type="text/javascript">
	//<![CDATA[
		$(window).load(function() { // makes sure the whole site is loaded
			$("#status").fadeOut(); // will first fade out the loading animation
			$("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
		});
	//]]>
</script> 
<!-- End Js -->

</body>
</html>