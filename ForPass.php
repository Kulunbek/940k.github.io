<?php
session_start();
$UserName=$_POST['txtUserName'];
$Question=$_POST['cmbQue'];
$Answer=$_POST['txtAnswer'];
$UserType=$_POST['rdUser'];

if($UserType=="Employer")
{
$con = mysqli_connect("localhost","kulunbek","Mitryaev111000","job");
//mysqli_select_db("job", $con);
$sql = "select * from employer_reg  where UserName='".$UserName."' and Question='".$Question."' and Answer='".$Answer."'";

$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
echo $records;
if ($records==0)
{
echo '<script type="text/javascript">alert("Предоставленная информация неверна");window.location=\'Forget.php\';</script>';
}
else
{
$_SESSION['ID']=$row['EmployerId'];
$_SESSION['Name']=$row['CompanyName'];

header('location:Employer/index.php');
} 
mysqli_close($con);
}
else
{
$con = mysqli_connect("localhost","kulunbek","Mitryaev111000","job");
//mysqli_select_db("job", $con);
$sql = "select * from jobseeker_reg  where UserName='".$UserName."' and Question='".$Question."' and Answer='".$Answer."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Предоставленная информация неверна");window.location=\'Forget.php\';</script>';
}
else
{
$_SESSION['ID']=$row['JobSeekId'];
$_SESSION['Name']=$row['JobSeekerName'];
header('location:JobSeeker/index.php');
} 
mysqli_close($con);
}
?>
