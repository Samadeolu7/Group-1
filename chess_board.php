<?php
	// this is basically just a header using html syntax
  echo '<h1 style=" color : #0000ff;"> CAPSTONE PROJECT GROUP 1 </h1>';
?>
	//this specifies the table we are using for the boad using html syntax
  <table width="400px" cellspacing="0px" cellpadding="0px" border="1px">

<?php
	//this is the back end for adding colors to the board
for($j=1;$j<=8;$j++)
{	
	echo "<tr>";
	for($i=1;$i<=8;$i++)
	{	
		$total=$j+$i;
		if($total%2==0)
		{
			// Here we have the color black written in hexadecimal for every even column
			echo "<td height=35px width=30px bgcolor=#FFFFFF></td>";
		}
		else
		{
			// Here we have the color white written in hexadecimal for every odd column
			echo "<td height=35px width=30px bgcolor=#000000></td>";
		}
	}
	echo "</tr>";
}
?>
</table>





