<?php

if(isset($_GET['path']))
{
//Read the filename
$filename = $_GET['path'];
//Check the file exists or not
if(file_exists($filename)) {

//Define header information
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header("Cache-Control: no-cache, must-revalidate");
header("Expires: 0");
header('Content-Disposition: attachment; filename="'.basename($filename).'"');
header('Content-Length: ' . filesize($filename));
header('Pragma: public');

//Clear system output buffer
flush();

//Read the size of the file
readfile($filename);

//Terminate from the script
die();
}
else{
echo "File does not exist.";
}
}
else
echo "Filename is not defined."
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UMAK Request</title>
  <link rel="shortcut icon" type="image/png" href="assets/img/logo.png">

  <meta content="" name="descripion">
  <meta content="" name="keywords">

 

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  
  <link href="assets/css/rstyle.css" rel="stylesheet">

 

  
</head>

<body>

  
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">CONTACT@UMAK.EDU.PH</a>
        <i class="icofont-phone"></i> (02) 8883 1860
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
       
      </div>
    </div>
  </div>

 
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <a href="index-user.html"><img src="assets/img/logo.png"  class="img-fluid" alt=""></a>
      <h1 class="logo mr-auto"><a href="index-user.html"> &nbsp; University of Makati</a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index-user.html">Home</a></li>
          <!-- <li><a href="#about">About</a></li> -->
          <!-- <li><a href="#services">Services</a></li> -->
           <!-- <li><a href="#contact">Contact</a></li> -->

        </ul>
      </nav>

    </div>
  </header>

  <br><br><br><br><br><br>
 

           
  <section id="contact" class="contact">
    <div class="container">

      <h1><center>Supporting Documents</center></h1> <br><br>

      <div class="row" data-aos="fade-up">

      
        <div class="col-lg-12">
          <form action="uploading.php" method="post" enctype="multipart/form-data" >
		    
            <div class="form-row">

              <div class="col-md-6 form-group">
<!-- CONCENRS -->
                            
<!-- CONCENRS --> 
                              <p style="font-size:13px"> Please complete the supporting documents below.</p>
                              <div class="col-lg-12 form-group" id="GM" name="GM"  >
                        
                              <input type="file" name="file" class="form-control"  > 

                              
                              <p style="font-size:13px"><a style="color:blue" href="request.php?path=supdocx/LetterFormat.docx"><u>LetterFormat.docx</u></a></p>
                          
                          </div>

                          

                         
                            </div>    
                    </div>
            
               <div class="form-group">
                        
                      </div>
                      <div class="mb-3">
                          <div class="loading"></div>
                          <div class="error-message"></div>
                          <div class="sent-message"></div>
                      </div>
                      <div class="text-center"><button type="submit" id="submit" name="submit"  class="btn btn-warning" style="color: white;">Submit Document</button></div>
					  
          </form>

		  

        </div>

      </div>

    </div>
  </section>

<br><br><br>




  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

        
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>KDMM</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        
        Designed by <a href="">KDMM</a>
      </div>
    </div>
  </footer>


<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>


<script src="assets/js/main.js"></script>


<script>
  function random_function()
  {
      var a=document.getElementById("college").value;
      
      if(a==="CCS")
      {
          var arr=[ "Choose Program",  "	I-ACSAD	"	,"	I-BCSAD	"	,"	II-ACSAD	"	,"	II-BCSAD	"	, "	III-ACSAD	"	,"	III-BCSAD	"	,"	IV-ACSAD	"	, "	IV-BCSAD	"	, "	I-AINS	"	, "	I-BINS	",
            "	II-AINS	"	, "	II-BINS	"	, "	III-AINS	"	, "	III-BINS	"	, "	IV-ACNA	"	, "	IV-BCNA	"	, "	IV-AITSM	"	,  "	IV-BITSM	"	,
            "	I-ACSSC	"	, "	I-BCSSC	"	, "	II-ACSSC	"	, "	II-BCSSC	"	, "	III-ACSSC	"	, "	III-BCSSC	"	,"	I-A APDEV	"	, "	I-B APDEV	"	, "	II-A APDEV	"	, "	II-B APDEV	"	, "	III-A APDEV	"	,
            "	III-B APDEV	"	, "	I-A NETAD	"	, "	I-B NETAD	"	, "	II-A NETAD	"	, "	II-B NETAD	"	, "	III-A NETAD	"	, "	III-B NETAD	"	];
      }
      else if(a==="COE")
      {
          var arr=[ "Choose Program","I-ECE	"	,"	II-ECE	"	,"	III-ECE	"	,"	IV-ECE	"	, "	I-SPED	"	, "	II-SPED	"	, "	III-SPED	"	, "	IV-SPED	"	, "	Filipino	"	, "	I-FILIPINO	"	, "	II-FILIPINO	"	, "	III-FILIPINO	"	,
            "	IV-FILIPINO	"	, "	I-GENSCI	"	, "	II-GENSCI	"	, "	III-GENSCI	"	, "	IV-GENSCI	"	, "	I-ENGLISH	"	, "	II-ENGLISH	"	, "	III-ENGLISH	"	, "	IV-ENGLISH	"	, "	I-MATH	"	, "	II-MATH	"	, "	III-MATH	"	,
            "	IV-MATH	"	,  "	I-SOCSTUD	"	, "	II-SOCSTUD	"	, "	III-SOCSTUD	"	, "	IV-SOCSTUD	"	, "	I-ECE	"	,  "	II-ECE	"	, "	III-ECE	"	, "	IV-ECE	"	, "	I-SPED	"	,"	II-SPED	"	, "	III-SPED	"	, "	IV-SPED	"];
      } 
      var string="";
 
      


   
      for(i=0;i<arr.length;i++)
      {
          string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
      }
      document.getElementById("output").innerHTML=string;
  }

</script>

// CONCERNS
<script>


function concern_function()
  {
      var g=document.getElementById("concern").value;
      
      if(g==="GOOD MORAL")
      {

      document.getElementById("sGM").hidden = "";
      document.getElementById("sTOR").hidden = "hidden";
      document.getElementById("sGA").hidden = "hidden";
          
      }
      else if(g==="GRADE AUTHENTICATION")
      {
        document.getElementById("sGA").hidden = "";
        document.getElementById("sGM").hidden = "hidden";
        document.getElementById("sTOR").hidden = "hidden";

      }
      else if(g==="TOR")
      {
        document.getElementById("sGA").hidden = "hidden";
        document.getElementById("sGM").hidden = "hidden";
        document.getElementById("sTOR").hidden = "";

      }

      else {
        document.getElementById("aGM").hidden = "hidden";
        document.getElementById("sGA").hidden = "hidden";
        document.getElementById("sTOR").hidden = "hidden";
      }
      
   
  //     var string="";
   
  //     for(i=0;i<arr.length;i++)
  //     {
  //         string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
  //     }
  //     document.getElementById("output").innerHTML=string;
  // }

  }

</script>

</body>

</html>
