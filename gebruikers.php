
<?php  


	if (isset($_GET['delete'])) {
		$sql = "DELETE FROM users WHERE user_id={$_GET['delete']}";
		$result = mysqli_query($conn,$sql);
	}

	$conn = mysqli_connect('localhost','root','','twente') or die('kan geen verbinding maken');

	if ($conn) {
		
		$sql = "SELECT * FROM users ";

		$result = mysqli_query($conn,$sql);
		$aantal = mysqli_num_rows($result);

		echo "aantal gebruikers: ".$aantal;
		echo "<table class='table'>
				<tr>
					<th>gebruikersnaam</th>
					<th>achternaam</th>
					<th>afdeling</th>
					<th>intern tel</th>";

				if (isset($_SESSION['ingelogd'])) {
					print <<<END
					<th>wachtwoord</th>					
					<th>bewerken</th>
					<th>verwijderen</th>
					<th>configuratie toevoegen</th>
					<th><a href='index.php?page=toevoegen'>toevoegen</a></th>
END;
					}
				"</tr>";

		while ($row = mysqli_fetch_assoc($result)) {

			echo
			"<tr>
				<td>" .$row['username']."</td>
				<td>" .$row['achternaam']."</td>
				<td>" .$row['afdeling']."</td>
				<td>" .$row['intern_tel']."</td>
				";

	if (isset($_SESSION['ingelogd'])) {
						$id = $row['user_id'];
						echo "<td>" .$row['password']."</td>";
						print <<<END

						<td><a href="index.php?page=bewerken&gebruikersId={$id}">Bewerken</a></td>
						<td><a href="index.php?page=gebruikers&delete={$id}">verwijderen</a></td>		
						<td><a href='index.php?page=toevoegen1&gebruikersId={$id}'>configuratie toevoegen</a></td>		
END;
		}

				echo "</tr>";


			
		}
	echo "</table>";		
	}






?>


