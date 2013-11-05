<head>
    <link rel='stylesheet'  href='css/style.css' type='text/css' media='all'> 
<?php
session_start();
include('conn.php');
$q="select * from item";
$res=mysql_query($q)or  die(mysql_error());


$n=mysql_num_rows($res);
echo"
<script src='jquery-1.8.2.min.js'></script>
<script>
var id= new Array ('";

for($r=1;$r<$n;$r++)
echo $r."','";
echo $r."');

var detail= new Array ('";

for($r=1;$r<$n;$r++)
echo "detail".$r."','";
echo "detail".$r."');";

	?>




$(document).ready(function(){
	
	$("#0").click(function (){
		
		$("#detail0").slideToggle(1000);
		});
	
	});
    
    $(document).ready(function(){
	
	$("#1").click(function (){
		
		$("#detail1").slideToggle(1000);
		});
	
	});
    
    $(document).ready(function(){
	
	$("#2").click(function (){
		
		$("#detail2").slideToggle(1000);
		});
	
	});
    
    $(document).ready(function(){
	
	$("#3").click(function (){
		
		$("#detail3").slideToggle(1000);
		});
	
	});
    
    $(document).ready(function(){
	
	$("#4").click(function (){
		
		$("#detail4").slideToggle(1000);
		});
	
	});
    
    $(document).ready(function(){
	
	$("#5").click(function (){
		
		$("#detail5").slideToggle(1000);
		});
	
	});
    
    $(document).ready(function(){
	
	$("#6").click(function (){
		
		$("#detail6").slideToggle(1000);
		});
	
	});
    
    $(document).ready(function(){
	
	$("#7").click(function (){
		
		$("#detail7").slideToggle(1000);
		});
	
	});
    
    $(document).ready(function(){
	
	$("#8").click(function (){
		
		$("#detail8").slideToggle(1000);
		});
	
	});
    
    $(document).ready(function(){
	
	$("#9").click(function (){
		
		$("#detail9").slideToggle(1000);
		});
	
	});
	
</script>
</head>
<body>
<div class ="fl_right">
    <center><img src="images/1.png" /></center></br>
    <img src="images/4.png" style="float:left;left:900px;position:relative;"/>
    </div>
  
<?php

for($i=$n-1;$i>=0;$i--)
{
 
 echo '<center><div style="position:relative; width:450px; background:#fafafa; box-shadow:5px #fafafa; z-index:5;" ><img style="border:2px solid #000;" src="userpics/'.mysql_result($res,$i,'pic').'"/></br><br>'.mysql_result($res,$i,'fname').'</div><button id='.$i.'>Show/hide details</button><br/><p id="detail'.$i.'" style="display:none; background:#fafafa;">'.mysql_result($res,$i,'fname').' '.mysql_result($res,$i,'lname').'</br>Prize : '.mysql_result($res,$i,'value').'<br/>Contact No : '.mysql_result($res,$i,'contact').'</br>Roll No : '.mysql_result($res,$i,'rollno').'</br></br></p></center>';
 
/*<?php ?> echo '<div width=50% ><img src="project/images/images (10)"/></br>'.$row['2']['fname'].'<button id="2">Show/hide details</button><br/><p id="detail2" style="display:none;">sjkhdksjdh<br/>jkgdkdsd</br>khakhjadAD</br>jagdajgdD</BR></p></div>';
 
 echo '<div width=50% ><img src="project/images/download (4)"/></br>'.$row['3']['fname'].'<button id=	"3">Show/hide details</button><br/><p id="detail3" style="display:none;">sjkhdksjdh<br/>jkgdkdsd</br>khakhjadAD</br>jagdajgdD</BR></p></div>';
 
 echo '<div width=50% ><img src="project/images/images (11)"/></br>'.$row['4']['fname'].'<button id="4">Show/hide details</button><br/><p id="detail4" style="display:none;">sjkhdksjdh<br/>jkgdkdsd</br>khakhjadAD</br>jagdajgdD</BR></p></div>';
 <?php*/ 
 
}
 ?>
 
 
 
</body>
</html>