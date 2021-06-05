<?php
if(!isset($_SESSION))
{
session_start();
}
	$FeedBack=$_POST['txtFeedback'];
	$FDate= date('y/m/d');
	$Id=$_SESSION['ID'];
	
	
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","kulunbek","Mitryaev111000","job");

	// Specify the query to Insert Record
	$sql = "insert into Feedback(JobSeekId,Feedback,FeedbakDate) values('".$Id."','".$FeedBack."','".$FDate."')";
	// execute query
	mysqli_query ($sql,$con);
	// Close The Connection
	mysqli_close ($con);
	
	echo '<script type="text/javascript">alert("Отзыв успешно отправлен");window.location=\'Feedback.php\';</script>';

?>
