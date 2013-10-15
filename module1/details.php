<?php
session_start();
$row[$n]=$_SESSION['detail'];
echo '<img src="userpics/'.$row[$n]['pic'].'"/></a><br/>'.$row[$n]['fname'].' '.$row[$n]['lname'].'</br>'.$row[$n]['phno'].'';

?>