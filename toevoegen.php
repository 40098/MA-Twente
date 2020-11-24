
<?php

if (!isset($_SESSION['ingelogd'])) {
	header("location: index.php");
}








$username = '';
$password = '';
$achternaam = '';
$user_id = '';
$afdeling = '';
$intern_tel = '';

	if ($_POST) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$achternaam = $_POST['achternaam'];
		$afdeling = $_POST['afdeling'];
		$intern_tel = $_POST['intern_tel'];
		$sql = "INSERT INTO users SET
			username = '{$username}',
			password = '{$password}',
			afdeling = '{$afdeling}',
			intern_tel = '{$intern_tel}',
			achternaam = '{$achternaam}'";

		if (mysqli_query($conn,$sql)) {
			header("location: index.php?page=gebruikers");
		}else{
			echo "Gegevens gebruiker zijn niet opgeslagen in de database!<br>";

		}
}
	


print<<< END
<form action="" method="post">
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
			<td>wachtwoord</td>
			<td><input type="text" name="password" value="{$password}"></td>
		</tr>
		<tr>
			<td>achternaam</td>
			<td><input type="text" name="achternaam" value="{$achternaam}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="opslaan" value="opslaan"></td>
		</tr> 


            
	</table>	
</form>
END;

?>







