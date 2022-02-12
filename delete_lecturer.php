
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Delete Lecturer</title>
	
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
#button{
		width: 300px;
		height: 40px;
		border-radius: 4px;
		border: none;
		background-color: rgb(59, 89, 152);
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
		background-color: white;
		width: 900px;
		
		font-weight: Bold;
		margin: auto;
		margin-top: 50px;
		padding: 10px;
		padding-top: 50px;
		text-align: center;
		float: center;
		border-radius: 17px;
		position: static;
	}
	#bar4{
		margin: auto;
		margin-top: 50px;
		padding: 10px;
		padding-top: 50px;
        width: 600px;
		text-align: center;
		float: center;
		border-radius: 17px;
		
		background-color: white;
		position: relative;
	}
	#bar5{
		background-color: #a9a9a9;
		width: 1100px;
		border-radius: 17px;
		margin: auto;
		margin-top: 50px;
		padding: 10px;
		padding-top: 50px;
	}
	#text{
		height: 40px;
		width: 300px;
		border-radius: 4px;
		border: solid 1px #aaa;
		padding: 4px;
		font-size: 14px;
	}
	table {
        width: 100%;
        border-collapse: collapse;
      }
      table,
      th,

      thead {
        background-color: rgb(59, 89, 152);
        color: #d9dfeb;
      }
      td {
        
        height: 50px;
        width: 750px;
        margin: auto;
        color: #52593b;
        text-align: left;

      }
      th {
        text-align: left;
        height: 50px;
      }
      tbody tr:nth-child(odd) {
        background: #ffffff;
      }
      tbody tr:nth-child(even) {
        background: #f4f4f4;
      }
      	#selects{
		height: 40px;
		width: 300px;
		border-radius: 4px;
		border: solid 1px #aaa;
		padding: 4px;
		font-size: 14px;
	}
	* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 40%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  font-size: 14px;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
  
  }

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: center;
  width: 100%;
  margin-top: 6px;
}

.col-75 {
  float: center;
  width: 100%;
  margin-right: 25px;
  margin-bottom: 20px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 100%) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 6px;
  }
}


</style>
<body style="font-family: tahoma;background-color: #ccc;">

		
		<div id="bar">
          <a href="log_out.php" id="log_out">logout</a>
	     <div style="font-size: 60px; padding-left: 20px; padding-top: 10px;"><img src="log.jpg" alt="log">  KILIMANI SCHOOL</div>
       

	</div>
<div class="vertical-menu" id="bar2">

  <a href="home.php" class="active">Home</a>
  <a href="admin.php">dashbord</a><br>
</div>
<br><br><br><br><br><br><br><br><br>
		

		

	


<div id="bar5">
	<fieldset style="border-radius: 17px;">
	
    <div id="bar4">
		
<form class="pure-form" action="deletelecturer.php" method="post">
    <fieldset style="border-radius: 20px;">
        <legend>Delete Lecturer From Kilimani School</legend>
	   <div  class="col-75" style=" padding-right: 120px;">
      <select id="selects" name="lecturer_number" onchange="cos('cs','email')" required="lecturer_number">
        <option value="info" style="font-size: 14px;">--- Select Lecturer ---</option>
        <option style="font-size: 14px;"><?php  
           $conn = mysqli_connect("localhost","root","","kilimani");
           if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
                       }
           $sql = "SELECT lecturer_number FROM lecturer_tbl";
           $result = mysqli_query($conn,$sql);
           
           while ($row = mysqli_fetch_assoc($result)) 
            {
            	echo "<option>"  . $row["lecturer_number"] ."<br>". "</option>";
           }
       ?></option>
       
      </select>
    </div>
      <br><br>
        <input type="reset" value="Reset  Form"  style="background-color: #42b72a;color: white; font-size: 16px; width: 160px;
	  text-align: center;
		padding: 10px;
		border-radius: 5px;
		margin-right: 16px;" /><br><br><br><br>
        <button type="submit" class="pure-button pure-button-primary" id="button">Submit</button>
    </fieldset>
</form>	
		
	</div>	

</fieldset>
</div><br><br><br>

<div id="bar3">
    <table >
      <thead>
        <tr>
        	<th>Lecturer Number</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Room Number</th>
        </tr>
      </thead>
      <tbody>
        <?php
   $conn = mysqli_connect("localhost","root","","kilimani");
    //check connection
    if ($conn == false) {
         die("Connection failed: " . mysqli_connect_error());
         } 
     $sql = "SELECT * FROM lecturer_tbl";
    $result = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($result)) 
            {
            	?>
            	<tr>
            		<td><?php echo $row['lecturer_number']?></td>
            		<td><?php echo $row['first_name']?></td>
            		<td><?php echo $row['last_name']?></td>

            		<td><?php echo $row['room_number']?></td>
            	</tr>


           <?php
              }
           ?>
           
     
           

        
      </tbody>
    </table>
  </div>
</body>
</html>