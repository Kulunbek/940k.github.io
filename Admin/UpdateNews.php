<?php
$Id = $_POST['txtNewsId'];
$News=$_POST['txtNews'];
$Date=$_POST['txtDate'];
// Establish Connection with MYSQL
$con = mysqli_connect("localhost","kulunbek","Mitryaev111000","job");
// Select Database
//mysql_select_db("job", $con);
// Specify the query to Update Record
$sql = "Update News_Master set News='".$News."',NewsDate='".$Date."' where NewsId=".$Id."";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("Новость успешно добавлена");window.location=\'News.php\';</script>';
?>
