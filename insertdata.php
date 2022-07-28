<?php
require('connect.php');

$UserID		  = $_REQUEST['user_id'];
$Type		  = $_REQUEST['type'];
$Message	  = $_REQUEST['message'];
$Severity	  = $_REQUEST['severity'];

$sql = "INSERT INTO report_data (user_id,type,message,severity) VALUES ('$UserID','$Type','$Message','$Severity')";

$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
	echo '<script>alert("บันทึกข้อมูลเรียบร้อยแล้ว")</script>';
} else {
	echo "Error : Input";
}
mysqli_close($conn);

?>

<html>

<head></head>

<body>
    <form action="select.php" method="get">
		<input type="submit" value="ย้อนกลับไปหน้าหลัก">
    </form>
</body>

</html>