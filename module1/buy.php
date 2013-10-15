<head>
<script src="jquery-1.8.2.min.js"></script>
<script>
$(document).ready(function(){
	
	$('#b'+n).click(function (){
		
		$('#detail'+n).slideToggle(1000);
		});
	
	});

</script>
</head>
<?php
session_start();
include('conn.php');
$q="select * from item";
$res=mysql_query($q)or  die(mysql_error());


$cnt=$n=mysql_num_rows($res);
 while($n)
 {
 $row[$n]=mysql_fetch_array($res);
 $n--;
 }
$n=1;
 while($n!=$cnt)
 {
 $_SESSION['detail']=$row[$n];
 echo '<div width=50% ><img src="userpics/'.$row[$n]['pic'].'"/></br>'.$row[$n]['fname'].'<button id="b'.$n.'">Show/hide details</button><br/><p id="detail'.$n.'" style="display:none;">sjkhdksjdh<br/>jkgdkdsd</br>khakhjadAD</br>jagdajgdD</BR></p></div>';
 
 }
 ?>
 
 
</body>
</html>