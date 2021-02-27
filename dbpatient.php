<?php

$con = mysqli_connect("localhost","root","","pathology");
if($con){
	echo "connect";
}else{

  echo "no connect";
}
?>



