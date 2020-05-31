<?php
class student extends DB {
 function get(){
 return $this->select("SELECT * FROM students");
 }
 function jan (){
 	return $this->select("SELECT * FROM students where intake = 'JAN INTAKE'");
}
function may (){
 	return $this->select("SELECT * FROM students where intake = 'MAY INTAKE'");
}
function august (){
 	return $this->select("SELECT * FROM students where intake = 'AUGUST INTAKE'");
}
}
?>