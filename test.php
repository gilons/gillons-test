<!DOCTYPE html>
<html>
<head>
	<title>Next step</title>
</head>
<body style="background-image: url(matthew-smith-5935.jpg); background-attachment: fixed;">

<?php
session_start();
var_dump($_SESSION);
exit();
?>


<div><center>
	<p style="background-image: url(elena-prokofyeva-17909.jpg); background-attachment: fixed;"><font face ="Comic sans MS" size="10px" >Please enter the names of your subjects below </font></p>

<?php
$i=0;	
while ( $i< intval($_SESSION["number"])) 
{

	$sub_names="sub_".$i;

	if(isset($_POST[$sub_names]))
	{

		if($_POST[$sub_names]) 
		{
			$_SESSION[$sub_names]=$_POST[$sub_names];
	
   				
		try {
		$sql1 = "ALTER TABLE ".$_SESSION["class_name"]."
		ADD ".$_SESSION[$sub_names]." TEXT ;";
		$pdo->exec($sql1);

			}
		catch(PDOException $e) {

									echo$e->getMessage();
								}
		}
	}

$i++;
?>

<div><form action ="<?php $_PHP_SELF ?>" method = "POST" style ="background-image: url(elena-prokofyeva-17909.jpg); background-attachment: fixed;">

<table><tr><td><?php echo "name".$i ?>:</td> <td><input type="text" name="<?php echo"$sub_names"; ?>" value = "<?php echo $_SESSION[$sub_names] ?>" /></td></tr>
																										

<?php

}

?>

</table>




p><font face ="Comic sans MS" size="10px" >Please the number of students in your class </font></p>
<form>


  the number of students is :  <input type="text" name="snumber" value="<?php echo $_SESSION["snumber"]?>">

  								<input type="hidden" name="number" value="<?php echo $_POST["number"];?>" id = "number"/>
					 	        <input type="hidden" name="snumber" value="<?php echo $_POST["snumber"]?>" id ="snumber"/>

					 	<?php
						  for($u = 0;$u<intval($_SESSION["number"]);$u++)
								   {$sub_names="sub_".$u;?>
								<input type="hidden" name="<?php echo $sub_names;?>" value="<?php echo$_POST[$sub_names];?>" id = "<?php echo $sub_names; ?>"/>
							<?php	
							}
							?>

							<input type="submit" value="Give Me">


</form>	

</center></div>

</body>
</html>