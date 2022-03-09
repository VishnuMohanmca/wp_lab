<?php
include("connection.php");
if(isset($_POST['submit']))
{
	
	$reg_No=$_POST['reg_No'];
	$name=$_POST['name'];
	$course_Code=$_POST['course_code'];
	$course_Name=$_POST['course_name'];
	$course_Mark=$_POST['mark'];
	$sql="INSERT INTO `book`(`reg_No`, `name`, `course_Code`, `course_Name`, `mark`) VALUES ('$reg_No','$name','$course_Code','$course_Name','$course_Mark')";

	//$querry->$conn 
	$result=mysqli_query($conn,$sql);
	if($result)
		echo "<script>alert('mark entered succesfully');</script>";
	else
		echo "<script>alert('mark entered not succesfully');</script>";
}
?>
<html>
<title>Registration Page</title>
<head>
<h1>Registration Form</h1>
</head>
<body>
<form action="#" method="POST">
<table border="1">
<tr>
<label>"Enter your Registration Number"</label>
<input type="number" name="reg_No"/>
</tr>
<tr>
<label>"Enter your name"</label>
<input type="text" name="name
</tr>
<tr>
<label>"Enter course code"</label>
<input type="course code" name="course_code">
<label>"Enter course name"</label>
<input type="text" name="course_name"/>
<label>"Enter your mark</label>
<input type="number" name="mark" >
<input type = "submit" name = "submit" value= "submit">
</form>
</body>
</html>







	