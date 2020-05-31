<!DOCTYPE htm>
<html>
<body>
<table align="center" border = "1px solid #050468" style ="width:900px; line-height:40px;">
	<th colspan="5" style="background-color:red; color:white;">STUDENTS IN YMCA</th>
	<tr>
		<th>STUDENTS NUMBER</th>
		<th>NAME</th>
		<th>COURSE</th>
		<th>NATIONALITY</th>
		<th>INTAKE</th>
	</tr>
<?php
 require "DB.php";
 require "student.php";
 $users = new student();
 foreach ($users->get() as $u) {
 	?>
 	<tr>
	<td><?php echo $u["ID"] ?></td>
	<td><?php echo $u["NAME"] ?></td>
	<td><?php echo $u["COURSE"] ?></td>
	<td><?php echo $u["NATIONALITY"] ?></td>
	<td><?php echo $u["INTAKE"] ?></td>
</tr>
<?php
 };
 ?>
</table>
</body>
</html>