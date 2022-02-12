
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>KIIT | dashbord_admin</title>
	
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	<style>
	
		/* Navigation bar styling */
		.menu-list {
			max-width: 100%;
			margin: auto;
			height: 100%;
			color: black;
			background-color: white;
			border-radius: 10px;
		}
	
		/* logo, navigation menu styling */
		.geeks {
			overflow: hidden;
			background-color: rgb(59, 89, 152);
			position: relative;

		}
	
		/* styling navigation menu */
		.geeks #menus {
			display: none;
		}
	
		/* link specific styling */
		.geeks a {
			text-decoration: none;
			color: white;
			padding: 14px 16px;
			font-size: 16px;
			display: block;
			height: 20px;
		}
	
		/* navigation toggle menu styling */
		.geeks a.icon {
			display: block;
			position: absolute;
			right: 1;
			top: 0;
		}
	
		/* hover effect on navigation logo and menu */
		.geeks a:hover {
			color: #d9dfeb;

		}
    
		.vertical-bar {
  width: 250px;
  height: 80px;
  


}

.vertical-bar a {
  background-color: white;
  color: black;
  font-size: 12px;
  display:block;
  padding: 12px;text-align: left;
  height: 80px;
  text-decoration: none;

}

.vertical-bar a:hover {
	height: 80px;
  background-color: #ccc;
}

.vertical-bar a.active {
  background-color: #04AA6D;
  color: white;
  height: 80px;
}
		
		#bar{
		
		background-color: rgb(59, 89, 152);
		color: #d9dfeb;
		font-size: 30px;
		padding: 4px;
		height: 150px;
		border-radius: 17px;
	}
	#log_out{
		background-color: #42b72a;
		width: 80px;
	  text-align: center;
		padding: 7px;
		border-radius: 4px;
		margin-right: 16px;
		float: right;
		color: white;
		font-size: 20px;
		text-decoration: none;
	}
	#menu{
    color: #d9dfeb;
    font-size: 12px;
    margin-right: 16px;

  }


	#text{
		height: 40px;
		width: 300px;
		border-radius: 4px;
		border: solid 1px #aaa;
		padding: 4px;
		font-size: 14px;
	}


	.vertical-menu {
  width: 250px;
  


}

.vertical-menu a {
  background-color: white;
  color: black;
  font-size: 12px;
  display:block;
  padding: 12px;text-align: left;

  text-decoration: none;

}

.vertical-menu a:hover {
	height: 80px;
  background-color: #ccc;
}

.vertical-menu a.active {
  background-color: #04AA6D;
  color: white;
}
#bar2{
		margin: auto;
		margin-top: 50px;
		padding: 10px;
		padding-top: 50px;

		text-align: center;
		float: left;
		border-radius: 17px;
		
		background-color: white;
		position: relative;
		

	}
#bar3{
		margin: auto;
		margin-top: 50px;
		padding-top: 50px;
		padding: 10px;
		margin-right: 16px;
    float: right;
		text-align: center;
		height: 100px;
		border-radius: 17px;
		
		background-color: white;
		position: relative;

	}
	#bar4{
		margin: auto;
		margin-top: 50px;
    padding-top: 50px;
		padding: 10px;
		height: 100px;
    float: left;
		text-align: center;
		
		border-radius: 17px;
		
		background-color: white;
		position: relative;
	}
	#bar5{
		background-color: #a9a9a9;
		width: 800px;
		border-radius: 17px;
		margin: auto;
		margin-top: 50px;
		padding: 10px;
		padding-top: 50px;
	}
	#button{
		width: 100px;
		height: 40px;
		border-radius: 4px;
		border: none;
		float: right;
		background-color: rgb(59, 89, 152);
		color: white;
	}

</style>
<body style="font-family: tahoma;background-color: #ccc;">

		
		<div id="bar">
          <a href="#" id="log_out">logout</a>
	     <div style="font-size: 60px; padding-left: 20px; padding-top: 10px;"><img src="log.jpg" alt="log">  KILIMANI SCHOOL</div>
       

	</div>
<div class="vertical-menu" id="bar2">

  <a href="#" class="active">Home</a>
  <a href="#">dashbord</a><br>
</div>
<br><br><br><br><br><br><br><br><br>
		

		

	


<div id="bar5">
	<fieldset style="border-radius: 17px;">
	<div class="vertical-menu" id="bar3">
  <a href="add_lecturer.php">Add Lecturer to the database</a>
	</div><br>
	<div class="vertical-menu" id="bar4">
  <a href="add_module.php">Add Module to the database</a>
	</div><br><br>
  <div class="vertical-menu" id="bar3">
  <a href="add_student.php">Add Student to the database</a>
	</div>
	
	<div class="vertical-menu" id="bar4">
  <a href="add_lecture.php">Add Lecture to the database</a>
	</div>
	<div class="vertical-menu" id="bar3">
  <a href="delete_module.php">Delete Module from the database</a>
	</div>
	<div class="vertical-menu" id="bar4">
  <a href="delete_student.php">Delete Student from the database</a>
	</div>
  
  <div class="vertical-menu" id="bar3">
  <a href="delete_lecturer.php">Delete Lecturer from the database</a>
	</div><br><br>
	<div class="vertical-menu" id="bar4">
  <a href="delete_lecture.php">Delete Lecture from the database</a>
	</div>
	<div class="vertical-menu" id="bar3">
	<a href="#">Generate PDF of students in the database<br><br><br>
		<form action="studentpdf.php" method="post" name="btn_pdf">	<button type="submit" id="button" name="btn_pdf">PDF</button></form>
</a>
  
	</div>
	<div class="vertical-menu" id="bar4">
	<a href="#">Generate PDF of lecturer in the database<br><br><br>
		<form action="lecturerpdf.php" method="post" name="btn_pdf">	<button type="submit" id="button" name="btn_pdf">PDF</button></form>
</a>
  
	</div>
	<div class="vertical-menu" id="bar3">
  <a href="#">Generate PDF of module in the database<br><br><br><form action="modulepdf.php" method="post">	<button type="submit" id="button" name="btn_pdf">PDF</button></form>
</a></a>
	</div>

</fieldset>
</div>
</body>
</html>
