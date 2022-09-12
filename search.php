<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "ajax");
$sql = "SELECT * FROM employee WHERE firstname LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
?>
<table border="5" width="1000" class="table">
<tr>

 <th>firtname</th>
 <th>lastname</th>
 <th>city</th>
 <th>salary</th>
 
</tr>

<?php
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	
              <tr>
		          <td>".$row['firstname']."</td>
		          <td>".$row['lastname']."</td>
		          <td>".$row['city']."</td>
		          <td>".$row['salary']."</td>
		        </tr>";
            
	}
    echo "</table>";
}
else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>