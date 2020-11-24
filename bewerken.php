
<?php

if (!isset($_SESSION['ingelogd'])) {
	header("location: index.php");
}


$gebruikersId = $_GET["gebruikersId"];
		$sql = "SELECT * FROM users WHERE user_id= " .$gebruikersId. "";
		$result = mysqli_query($conn,$sql);
		$data = mysqli_fetch_array($result);

		$username = $data['username'];
		$password = $data['password'];
		$achternaam = $data['achternaam'];
		$afdeling = $data['afdeling'];
		$intern_tel = $data['intern_tel'];






	
	if ($_POST) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$achternaam = $_POST['achternaam'];
		$gebruikersId = $_POST['gebruikersId'];
		$afdeling = $_POST['afdeling'];
		$intern_tel = $_POST['intern_tel'];

		$sql = "UPDATE users SET
			username = '{$username}',
			password = '{$password}',
			afdeling = '{$afdeling}',
			intern_tel = '{$intern_tel}',
			achternaam = '{$achternaam}' WHERE user_id={$gebruikersId}";

		if (mysqli_query($conn,$sql)) {
			header("location: index.php?page=gebruikers");
		}else{
			echo "Gegevens gebruikers zijn niet opgeslagen in de database!<br>";
		}
}
	


print<<< END
<form action="" method="post">
	<input type="hidden" name="gebruikersId" value="{$gebruikersId}">
	<table>
		<tr>
			<td>gebruikersnaam</td>
			<td><input type="text" name="username" value="{$username}"></td>
		</tr>
		
		<tr>
			<td>afdeling</td>
			<td><input type="text" name="afdeling" value="{$afdeling}"></td>
		</tr>
		<tr>
			<td>intern tel</td>
			<td><input type="text" name="intern_tel" value="{$intern_tel}"></td>
		</tr>
		<tr>
			<td>achternaam</td>
			<td><input type="text" name="achternaam" value="{$achternaam}"></td>
		</tr>
		<tr>
			<td>wachtwoord</td>
			<td><input type="text" name="password" value="{$password}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="opslaan" value="opslaan"></td>
		</tr> 


            
	</table>	
</form>
END;

?>







