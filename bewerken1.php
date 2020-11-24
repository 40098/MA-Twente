
<?php

if (!isset($_SESSION['ingelogd'])) {
	header("location: index.php");
}


$configuratieId = $_GET["configuratieId"];
		$sql = "SELECT * FROM configuratie WHERE id= " .$configuratieId. "";
		$result = mysqli_query($conn,$sql);
		$data = mysqli_fetch_array($result);

		$config1 = $data['config1'];
		$config2 = $data['config2'];
		$configId = $data['id'];






	
	if ($_POST) {
		$config1 = $_POST['config1'];
		$config2 = $_POST['config2'];
		$configId = $_POST['configId'];

		$sql = "UPDATE configuratie SET
			config1 = '{$config1}',
			config2 = '{$config2}' WHERE id={$configId}";

		if (mysqli_query($conn,$sql)) {
			header("location: index.php?page=configuratie");
		}else{
			$melding = "Gegevens configuratie zijn niet opgeslagen in de database!<br>";
		}
}
	


print<<< END
<form action="" method="post">
	<input type="hidden" name="configId" value="{$configId}">
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







