<!DOCTYPE htm>
<html>
<body style ="background-image: url('ylogo.jpg'); background-repeat: no-repeat; background-position:right;">
<table align="center" border = "1px solid #050468" style ="width:900px; line-height:20px;">
	<th colspan="5" style="background-color:red; color:white; line-height:40px; font-size: 17px;">MAY INTAKE STUDENTS IN YMCA</th>
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
 foreach ($users->may() as $u) {
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
 <div class="panel front-primary" style="border: 1px solid #050468;">
<ul display = 'inline'>
      <li display = 'inline'><a href="schoolview.php" display = 'inline';>ALL STUDENTS</a></li>
  		<li display = 'inline'><a href="jan.php" display = 'inline';>JAN INTAKE</a></li>
  		<li display = 'inline'><a href="may.php" display = 'inline';>MAY INTAKE</a></li>
  		<li display = 'inline'><a href="august.php" display = 'inline';>AUGUST INTAKE</a></li>
  	</ul>
  </div>
</table>
