<!DOCTYPE HTML>
<html class="no-js">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Disease Prediction</title>

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>
<meta name="format-detection" content="telephone=no"/>

<link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="../css/style.css" rel="stylesheet" type="text/css"/>
<link href="../plugins/sequence/css/sequence.html" rel="stylesheet" type="text/css"/>
<link href="../plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
<link href="../plugins/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css"/>
<link href="../plugins/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="../plugins/rs-plugin/css/settings.css" media="screen" />

<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="../css/ie8.css" media="screen" /><![endif]-->


<link class="alt" href="../colors/blue.css" rel="stylesheet" type="text/css"/>

<script src="../js/modernizr.js"></script>
<script type="text/javascript">
function validate_form() {
  var organ_name = document.getElementById("organ_name").value;
  var validchar = /^[A-Za-z\s]+$/;

  if (organ_name.trim() === '') {
    alert("Please enter an organ name.");
    return false;
  } else if (/\d/.test(organ_name)) {
    alert("Organ name should not contain any numbers.");
    return false;
  } else if (/([A-Za-z])\1{2,}/.test(organ_name)) {
    alert("Organ name should not have a repeating character more than 2 times.");
    return false;
  } else if (!/^([A-Za-z\s]*\([A-Za-z]+\)[A-Za-z\s]*|[A-Za-z\s]+)$/.test(organ_name)) {
    alert("Organ name should only contain alphabets and properly used parentheses or data without parentheses.");
    return false;
  }
}
</script>

<?php
require_once "adminhelper.php";
$helper = new AdminHelper();

if($_SESSION['admin_userid']=='')
{
    echo "<script>window.location='index.php';</script>";
}

$msg = '';
$row = array();

$id = $_REQUEST['id'];

if($_POST)
{
    $msg = $helper->addOrgan();
}
if($id)
{
    $row = $helper->getOrgan($id);
}
?>
        
</head>
<body class="boxed"  style="background-image: url('../images/backgrounds/images/img3.jpg'); background-repeat: no-repeat; background-size: cover;">
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]--> 
<!-- Preloader -->
<div id="preloader">
  <div id="status"></div>
</div>

<!-- Start Body Container -->
<div class="body footer-style2"> 
  <!-- Start Header -->
  <?php
    require_once "header.php";
  ?>
  <!-- End Header --> 
  
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content page-content full">
      <header class="page-header flexible parallax text-align-center parallax-overlay" style="background-image:url(../images/img4.jpg)">
        <section>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1><?php echo ($id) ? 'Edit' : 'Add'; ?> Organ</h1>
              </div>
            </div>
          </div>
        </section>
      </header>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2><strong><?php echo ($id) ? 'Edit' : 'Add'; ?> Organ</strong></h2>
            <hr/>
            <?php
            if($msg!='')
            {
                ?>
                <div class="alert alert-info" role="alert">
					<h3 style="text-transform: none;"><?php echo $msg; ?></h3>
				</div>
                <?php
            }
            ?>
            <form method="post" action="" onsubmit="return validate_form();">
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label>Organ Name</label>
                    <input type="text" id="organ_name" name="organ_name" class="form-control input-lg" placeholder="Organ Name" value="<?php echo $row->organ_name;?>"/>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <input type="hidden" id="id" name="id" value="<?php echo $row->id;?>" />
                    <input type="submit" name="submit" class="btn btn-primary btn-lg" value="<?php echo ($id) ? 'Update' : 'Save'; ?>"/>
                  </div>
                </div>
              </div>
            </form>
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
<script src="../js/jquery-latest.min.js"></script> <!-- Jquery Library Call --> 
<script src="../plugins/prettyphoto/js/prettyphoto.js"></script>
<script src="../plugins/prettyphoto/js/prettyphoto.js"></script>  
<script src="../plugins/owl-carousel/js/owl.carousel.min.js"></script> 
<script src="../plugins/page-scroller/jquery.pagescroller.js"></script> 
<script src="../js/helper-plugins.js"></script> <!-- Plugins --> 
<script src="../js/bootstrap.js"></script> <!-- UI --> 
<script src="../js/init.js"></script> <!-- All Scripts --> 
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