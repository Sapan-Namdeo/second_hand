<?php
session_start();
if(isset($_SESSION['success']))
echo "YOUR ADD HAS BEEN SAVED SUCCESSFULLY";

?>	


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
    <link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'> 
    <link rel='stylesheet'  href='css/style.css' type='text/css' media='all'> 





 <script type='text/javascript' src='scripts/jquery.min.js'></script>
    <script type='text/javascript' src='scripts/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='scripts/camera.min.js'></script> 
    
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				thumbnails: true
			});

			
		});
	</script>

</head>

<body>

<div class="container">
<div class ="fl_right">
    <center><img src="images/1.png" /></center></br>
    <img src="images/4.png" style="float:left;left:700px;position:relative;"/>
    </div>
  
  
  <div class="content" style="width:100%;">
  <center>
  
	<div class="fluid_container">
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <div data-thumb="images/main/download.jpg" data-src="images/main/download.jpg">
                <div class="camera_caption fadeFromBottom">
                    Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
                </div>
            </div>
            <div data-thumb="images/main/download (1).jpg" data-src="images/main/download (1).jpg">
                <div class="camera_caption fadeFromBottom">
                    Try this for new experience, <em>You can flap it 360degree</em>
                </div>
            </div>
            <div data-thumb="images/main/download (2).jpg" data-src="images/main/download (2).jpg">
                <div class="camera_caption fadeFromBottom">
                    A site engineering book <em>the book is in a good condiition </em> Try to buy it now
                </div>
            </div>
             <div data-thumb="images/main/images (1).jpg" data-src="images/main/images (1).jpg">
                <div class="camera_caption fadeFromBottom">
                    A samsung laptop in a good condition <em> with some good acceseries</em> 
                                    </div>
            </div>
             <div data-thumb="images/main/images (2).jpg" data-src="images/main/images (2).jpg">
                <div class="camera_caption fadeFromBottom">
                   Gibson guitar <em> In a good condition </em> Perfect sound
                </div>
            </div>
             <div data-thumb="images/main/images (3).jpg" data-src="images/main/images (3).jpg">
                <div class="camera_caption fadeFromBottom">
                    Stylish guitar with a great sound <em> having the pectum with this</em> 
                </div>
            </div>
             <div data-thumb="images/main/images (4).jpg" data-src="images/main/images (4).jpg">
                <div class="camera_caption fadeFromBottom">
                   Greate electronic guitar <em> With a sound controler</em> with a beautiful sound
                </div>
            </div>
             <div data-thumb="images/main/images (5).jpg" data-src="images/main/images (5).jpg">
                <div class="camera_caption fadeFromBottom">
                    Herculies bicycle  <em> Good condition </em> 
                </div>
            </div>
             <div data-thumb="images/main/images (6).jpg" data-src="images/main/images (6).jpg">
                <div class="camera_caption fadeFromBottom">
                    Atles bicycle <em> Cheapest prize </em> 
                </div>
            </div>
             <div data-thumb="images/main/images (7).jpg" data-src="images/main/images (7).jpg">
                <div class="camera_caption fadeFromBottom">
                    HTC mobile <em> With a beautiful quarty keyped</em> 
                </div>
            </div>
             <div data-thumb="images/main/images (8).jpg" data-src="images/main/images (8).jpg">
                <div class="camera_caption fadeFromBottom">
                    iPhone5 in a good condition <em> 8GB internal memory, super camera</em> 
                </div>
            </div>
             <div data-thumb="images/main/images.jpg" data-src="images/main/images.jpg">
                <div class="camera_caption fadeFromBottom">
                    Samsung galexy mobile phone <em> good camera quality, ear-peaces with this </em> 
                </div>
            </div>
            <div data-thumb="images/main/download (3).jpg" data-src="images/main/download (3).jpg">
                <div class="camera_caption fadeFromBottom">
                    A beautiful bicycle <em> get in the cheapest prize</em>
                </div>
            </div>
        </div>
<a href="buy.php"><input type="button" name="buy" value="Buy" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="sell.php"><input type="button" name="sell" value="SELL" /></a><br /><br /><br /><br /><br />


</center>
    <!-- end .content --></div>
 
  <div class="footer">
    <center><font face="Ebrima" size="+1" color="#EEEEEE">copyright &copy; sapan_namdeo</font></center>

    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
