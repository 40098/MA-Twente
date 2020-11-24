
<?php

if (!isset($_SESSION['ingelogd'])) {
	header("location: index.php");
}








$config1 = '';
$config2 = '';
$gebruikersid = '';


	if ($_POST) {
		$config1 = $_POST['config1'];
		$config2 = $_POST['config2'];
		$gebruikersid = $_POST['gebruikersid'];

		$sql = "INSERT INTO configuratie SET
			gebruikersid = {$gebruikersid},
			config1 = '{$config1}',
			config2 = '{$config2}'";


		if (mysqli_query($conn,$sql)) {
			header("location: index.php?page=configuratie");
		}else{
			echo "Gegevens configuratie zijn niet opgeslagen in de database!<br>";
		}
}
	


print<<< END
<form action="" method="post">
	<input type="hidden" name="gebruikersid" value="{$_GET['gebruikersId']}">
	<table>
		<tr>
			<td>Configuratie 1</td>
			<td><input type="text" name="config1" value="{$config1}"></td>
		</tr>
		<tr>
			<td>Configuratie 2</td>
			<td><input type="text" name="config2" value="{$config2}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="opslaan" value="opslaan"></td>
		</tr> 


            
	</table>	
</form>
END;

?>







