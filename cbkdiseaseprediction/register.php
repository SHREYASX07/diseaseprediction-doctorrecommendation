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
<script type="text/javascript">
    function validate_form()
    {
        var hospital_name     = document.getElementById("hospital_name").value;
        var hospital_phone    = document.getElementById("hospital_phone").value;
        var hospital_email    = document.getElementById("hospital_email").value;
		var hospital_city     = document.getElementById("hospital_city").value;
		var hospital_address  = document.getElementById("hospital_address").value;
		var doctor_name       = document.getElementById("doctor_name").value;
        var doctor_phone      = document.getElementById("doctor_phone").value;
        var doctor_qualification= document.getElementById("doctor_qualification").value;
        var doctor_speciality= document.getElementById("doctor_speciality").value;
		var username          = document.getElementById("username").value;
		var password          = document.getElementById("password").value;
       
        var validchar = /^[A-Z a-z]+$/;
        // Hospital Name
        if (hospital_name.trim() === "") {
        alert("Hospital name cannot be empty.");
        return false;
        }
        var repeatingCharsRegex = /([a-zA-Z])\1{2}/;
        if (repeatingCharsRegex.test(hospital_name)) {
            alert("Hospital name should not have repeating alphabets more than 2 times.");
            return false;
        }
        var numberRegex = /\d/;
        if (numberRegex.test(hospital_name)) {
            alert("Hospital name should not contain numbers.");
            return false;
        }
        var specialCharsRegex = /[^a-zA-Z\s]/;
        if (specialCharsRegex.test(hospital_name)) {
            alert("Hospital name should not contain special characters or mixed characters.");
            return false;
        }
        //Hospital Phone Number
        else if(hospital_phone=='')
        {
            alert("Please Enter Hospital Phone Number.");
            return false;  
        }
        else if(isNaN(hospital_phone))
        {
            alert("Hospital Phone Number should be numeric.");
            return false;  
        }
        else if(checkInternationalPhone(hospital_phone)==false)
        {
            alert("Please Enter a Valid Hospital Phone Number");
            return false;
        }
        //Hospital Email
        if (hospital_email.trim() === "") {
            alert("Hospital email cannot be empty.");
            return false;
        }
        var emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[cC][oO][mM]$/;
        if (!emailRegex.test(hospital_email)) {
            alert("Invalid hospital email format.");
            return false;
        }
        var repeatingCharsRegex = /^([A-Za-z0-9._%+-])\1+@/;
        if (repeatingCharsRegex.test(hospital_email)) {
            alert("Hospital email should not have repeating characters or alphabets before and after the @ symbol.");
            return false;
        }
        var emailRegex = /^[A-Za-z0-9._%+-]+@gmail\.com$/;
        if (!emailRegex.test(hospital_email)) {
            alert("Invalid Gmail address.");
            return false;
        }
        else if(validateEmail(hospital_email))
        {
            alert("Please Enter Valid Email Address.");
            return false;   
        }
        else if(hospital_city=='')
        {
            alert("Please Select City.");
            return false;   
        }
        //Hospital Address
        if (hospital_address.trim() === "") {
            alert("Hospital address cannot be empty.");
            return false;
        }
        var numericRegex = /[0-9]/;
        if (numericRegex.test(hospital_address)) {
            alert("Hospital address should not contain numeric digits.");
            return false;
        }
        var specialCharsRegex = /[^a-zA-Z0-9\s.\-]/;
        if (specialCharsRegex.test(hospital_address)) {
            alert("Hospital address should only contain alphabets, numbers, spaces, full stops, and hyphens.");
            return false;
        }
        var repeatingCharsRegex = /([a-zA-Z])\1{2}/;
        if (repeatingCharsRegex.test(hospital_address)) {
            alert("Hospital address should not have repeating characters or alphabets more than 2 times.");
            return false;
        }
        //Doctor Name
        if (doctor_name.trim() === "") {
            alert("Doctor name cannot be empty.");
            return false;
        }
        var repeatingCharsRegex = /([a-zA-Z])\1{2}/;
        if (repeatingCharsRegex.test(doctor_name)) {
            alert("Doctor name should not have repeating  alphabets more than 2 times.");
            return false;
        }
        var specialCharsRegex = /[!@#$%^&*(),.?":{}|<>]/;
        if (specialCharsRegex.test(doctor_name)) {
            alert("Doctor name should not contain special characters.");
            return false;
        }
        var specialCharsRegex = /[^a-zA-Z\s]/;
        if (specialCharsRegex.test(doctor_name)) {
            alert("Doctor name should only contain alphabets and spaces.");
            return false;
        }
        //Doctor Phone Number
        else if(doctor_phone=='')
        {
            alert("Please Enter Doctor Phone Number.");
            return false;  
        }
        else if(isNaN(doctor_phone))
        {
            alert("Doctor Phone Number should be numeric.");
            return false;  
        }
        else if(checkInternationalPhone(doctor_phone)==false)
        {
            alert("Please Enter a Valid Doctor Phone Number");
            return false;   
        }
        //Doctor Qualification
        if (doctor_qualification.trim() === "") {
            alert("Doctor qualification cannot be empty.");
            return false;
        }
        var numericRegex = /[0-9]/;
        if (numericRegex.test(doctor_qualification)) {
            alert("Doctor qualification should not contain numeric characters.");
            return false;
        }
        var specialCharsRegex = /[^a-zA-Z\s]/;
        if (specialCharsRegex.test(doctor_qualification)) {
            alert("Doctor qualification should only contain alphabets and spaces.");
            return false;
        }
        var repeatingCharsRegex = /([a-zA-Z])\1{2}/;
        if (repeatingCharsRegex.test(doctor_qualification)) {
            alert("Doctor qualification should not repeat the alphabets more than 2 times.");
            return false;
        }
        //Doctor Speciality
        else if(doctor_speciality=='')
        {
            alert("Please Select Doctor Speciality.");
            return false;  
        }
        //Username
        if (username.trim() === "") {
            alert("Username cannot be empty.");
            return false;
        }
        var numericRegex = /[0-9]/;
        if (numericRegex.test(username)) {
            alert("Username should not contain numeric characters.");
            return false;
        }
        var specialCharsRegex = /[^a-zA-Z\s]/;
        if (specialCharsRegex.test(username)) {
            alert("Username should only contain alphabets and spaces.");
            return false;
        }
        var repeatingCharsRegex = /([a-zA-Z])\1{2}/;
        if (repeatingCharsRegex.test(username)) {
            alert("Username should not have repeating characters or alphabets more than 2 times.");
            return false;
        }
        //Password
        if (password.trim() === "") {
            alert("Password cannot be empty.");
            return false;
        }
        var criteriaRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,16}$/;
        if (!criteriaRegex.test(password)) {
            alert("Password should contain at least 8 and at most 16 characters, including at least one uppercase letter, one lowercase letter, and one digit.");
            return false;
        }
}
    
    function validateEmail(email)
    {
        var atpos  = email.indexOf("@");   // The indexOf() method returns the position of the first occurrence of a specified value in a string. // Default value of start is 0  
        //alert(atpos);
        var dotpos = email.lastIndexOf(".");  // The lastIndexOf() method returns the position of the last occurrence of a specified value in a string. // Default value of start is 0  
        //alert(dotpos);
        
        if((atpos<1) || (dotpos<(atpos+2)) || (dotpos+2>=email.length))  
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    // Declaring required variables
    var digits = "0123456789";
    // non-digit characters which are allowed in phone numbers
    var phoneNumberDelimiters = "()- ";
    // characters which are allowed in international phone numbers
    // (a leading + is OK)
    var validWorldPhoneChars = phoneNumberDelimiters + "+";
    // Minimum no of digits in an international phone no.
    var minDigitsInIPhoneNumber = 10;
    
    function isInteger(s)
    {   var i;
        for (i = 0; i < s.length; i++)
        {   
            // Check that current character is number.
            var c = s.charAt(i);
            if (((c < "0") || (c > "9"))) return false;
        }
        // All characters are numbers.
        return true;
    }
    
    function trim(s)
    {   var i;
        var returnString = "";
        // Search through string's characters one by one.
        // If character is not a whitespace, append to returnString.
        for (i = 0; i < s.length; i++)
        {   
            // Check that current character isn't whitespace.
            var c = s.charAt(i);
            if (c != " ") returnString += c;
        }
        return returnString;
    }
    
    function stripCharsInBag(s, bag)
    {   var i;
        var returnString = "";
        // Search through string's characters one by one.
        // If character is not in bag, append to returnString.
        for (i = 0; i < s.length; i++)
        {   
            // Check that current character isn't whitespace.
            var c = s.charAt(i);
            if (bag.indexOf(c) == -1) returnString += c;
        }
        return returnString;
    }
    
    function checkInternationalPhone(strPhone){
        var bracket=3;
        strPhone=trim(strPhone);
        if(strPhone.indexOf("+")>1) return false;
        if(strPhone.indexOf("-")!=-1)bracket=bracket+1;
        if(strPhone.indexOf("(")!=-1 && strPhone.indexOf("(")>bracket)return false;
        var brchr=strPhone.indexOf("(");
        if(strPhone.indexOf("(")!=-1 && strPhone.charAt(brchr+2)!=")")return false;
        if(strPhone.indexOf("(")==-1 && strPhone.indexOf(")")!=-1)return false;
        s=stripCharsInBag(strPhone,validWorldPhoneChars);
        return (isInteger(s) && s.length >= minDigitsInIPhoneNumber);
    }    
</script>
<?php
require_once "healthhelper.php";
$helper = new HealthHelper();

$db = new Database();
$db->open();

$msg = "";
if($_POST)
{
    $r = $helper->addUser();
    if($r)
    {
        $msg='<div class="alert alert-info" role="alert">
				<h3>You are Registered Successfully.</h3>
			  </div>';
    }
    else
    {
        $msg='<div class="alert alert-info" role="alert">
				<h3>Username Already Exists.</h3>
			  </div>';
    }
}    
?>
</head>
<body class="boxed"  style="background-image: url('images/backgrounds/images/img3.jpg'); background-repeat: no-repeat; background-size: cover;">
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
      <header class="page-header flexible parallax text-align-center parallax-overlay" style="background-image:url(images/img4.jpg)">
        <section>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1>Doctor Register</h1>
              </div>
            </div>
          </div>
        </section>
      </header>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2><strong>Register</strong></h2>
            <hr/>
            <p><?php echo $msg;?></p>
            <form method="post" action="" onsubmit="return validate_form();" enctype="multipart/form-data">
                 <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label>Hospital Name</label>  
                        <input type="text" id="hospital_name" name="hospital_name"  class="form-control input-md" placeholder="Hospital Name"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Hospital Phone</label>
                            <input type="text" id="hospital_phone" name="hospital_phone"  class="form-control input-md" maxlength="10" placeholder="Hospital Phone"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Hospital Email</label>
                            <input type="text" id="hospital_email" name="hospital_email"  class="form-control input-md" placeholder="Hospital Email"/>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label>Hospital City</label>  
                        <select id="hospital_city" name="hospital_city"  class="form-control input-md">
                            <option value="">Select City</option>
                            <option value="1">Chikodi</option>
                            <option value="2">Nipani</option>
                            <option value="3">Kolhapur</option>
                            <option value="4">Belgaum</option>
                            <option value="5">Miraj</option>
                            <option value="6">Sangli</option>
                            <option value="7">Dharwad</option>
                            <option value="8">Pune</option>
                            <option value="9">Mumbai</option>
                            <option value="10">Bangalore</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Hospital Address</label>
                            <input type="text" id="hospital_address" name="hospital_address"  class="form-control input-md" placeholder="Hospital Address"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Doctor Name</label>
                            <input type="text" id="doctor_name" name="doctor_name"  class="form-control input-md" placeholder="Doctor Name"/>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Doctor Phone</label>
                            <input type="text" id="doctor_phone" name="doctor_phone"  class="form-control input-md" maxlength="10" placeholder="Doctor Phone"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Doctor Qualification</label>
                            <input type="text" id="doctor_qualification" name="doctor_qualification"  class="form-control input-md" placeholder="Doctor Qualification"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label>Doctor Speciality</label>  
                        <select class="form-control" id="doctor_speciality" name="doctor_speciality">
                            <option value="">Select</option>
                            <?php
                            $sql = "SELECT * FROM `organs`";
                            $result = $db->query($sql);
                            while($row = $db->fetcharray($result))
                            {
                                ?>
                                <option value="<?php echo $row['id'];?>"><?php echo $row['organ_name'];?></option>
                                <?php
                            }
                            ?>
                        </select>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Photo</label>
                            <input type="file" id="photo" name="photo"  class="form-control input-md"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label>User Name</label>  
                        <input type="text" id="username" name="username"  class="form-control input-md" placeholder="Username"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" id="password" name="password"  class="form-control input-md" placeholder="Password"/>
                        </div>
                    </div>
                </div>
              
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Register now!"/>
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
<script src="js/jquery-latest.min.js"></script> <!-- Jquery Library Call --> 
<script src="plugins/prettyphoto/js/prettyphoto.js"></script>
<script src="plugins/prettyphoto/js/prettyphoto.js"></script>  
<script src="plugins/owl-carousel/js/owl.carousel.min.js"></script> 
<script src="plugins/page-scroller/jquery.pagescroller.js"></script> 
<script src="js/helper-plugins.js"></script> <!-- Plugins --> 
<script src="js/bootstrap.js"></script> <!-- UI --> 
<script src="js/init.js"></script> <!-- All Scripts --> 
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