<?php
	$result=mysql_query($query,$conn);

		echo "<table border='1'>
			<tr>	
			<th>Name</th>
			<th>Sex</th>
			<th>Student Number</th>
			<th>The Club Joined</th>
			<th>The Time Joined</th>
			<th>The phone number</th>
			<th>The E-mail</th>	
			</tr>";

		while($row=mysql_fetch_row($result))
		{
			echo "<tr>";
  			echo "<td>" . $row[0] . "</td>";
  			echo "<td>" . $row[1] . "</td>";
  			echo "<td>" . $row[2] . "</td>";
  			echo "<td>" . $row[3] . "</td>";
  			echo "<td>" . $row[4] . "</td>";
  			echo "<td>" . $row[5] . "</td>";
  			echo "<td>" . $row[6] . "</td>";
 			echo "</tr>";
		}
		echo "</table>";
?>