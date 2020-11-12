<html>
<body>
<p ><strong><center>THIS IS A PROGRAM TO DISPLAY INTEGER</center></strong></p>

<?php



$i="1";

echo "Input:".$i."--------------------------------->";



while ($i!=11)
{
	if($i!=3){
		echo "OUTPUT:".$i;
		echo "<br>";
		$i=$i+1;
		
			echo "Input:".$i."--------------------------------->";
		
			
			 
		
	}
	else
	{
		echo "NO OUTPUT TO BE DISPLAYED";
		$i=$i+1;
		echo "<br>"; 
		echo "Input:".$i."--------------------------------->";
		
			
	}

}
echo "PROGRAM TERMINATED!";
echo "<br>";

?>
<br><a href="logoutdwhile.php">SIGN OUT</a></br>

</body>
</html>