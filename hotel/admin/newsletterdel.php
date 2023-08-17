<?php

include ('db.php');

$id=$_GET['eid'];
if($id=="")
{
echo '<script>alert("Lỗi!") </script>' ;
		header("Location: messages.php");
}

else{
$view="DELETE FROM `contact` WHERE id ='$id' ";

	if($re = mysqli_query($con,$view))
	{
		echo '<script>alert("Thông báo đã được gửi!") </script>' ;
		header("Location: messages.php");
	}


}







?>