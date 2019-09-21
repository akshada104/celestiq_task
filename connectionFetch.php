<html>
 <head>
 <style>
    .tableValues
	{
		display:inline-block;
		padding:12px;
		width:14rem;
	}
	</style>
 </head>

<?php

   include 'connection.php';  //connection file
  
   
   if(isset($_POST["Submit"])) {
   $Email_Address=$_POST["Email_Address"];
   $Password=$_POST["password"];
  
   //select query for fetch 
   $sql = "select * from `login` where Email_Address = '$Email_Address' and Password= '$Password'";  
   $result =mysqli_query($conn, $sql);

   if(mysqli_num_rows($result) > 0) 
   {
	   echo "<div><div class='tableValues'>First Name</div><div class='tableValues'>Last Name</div><div class='tableValues'>Email</div><div class='tableValues'>Contact</div><div class='tableValues'>Account Created Date</div><div class='tableValues'>Last Login</div></div>";
    while($row=mysqli_fetch_assoc($result))
		{
         echo  "<div><div class='tableValues'>".$row["First_Name"]."</div><div class='tableValues'>".$row["Last_Name"]."</div><div class='tableValues'>".$row["Email_Address"]."</div><div class='tableValues'>".$row["Contact_Number"]."</div><div class='tableValues'>".$row["Date"]."</div><div class='tableValues'>".$row["Date_Time"]."</div></div>";
       }
       //echo "results";
   }
 else {
      echo "0 results";
   }
}
?>
</html>
