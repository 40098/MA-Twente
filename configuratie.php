<?php


	if (isset($_GET['delete'])) {
		$sql = "DELETE FROM configuratie WHERE id={$_GET['delete']}";
		$result = mysqli_query($conn,$sql);
	}

	$conn = mysqli_connect('localhost','root','','twente') or die('kan geen verbinding maken');

	if ($conn) {
		
		$sql = "SELECT * FROM configuratie,users 
		WHERE configuratie.gebruikersid = users.user_id";

		$result = mysqli_query($conn,$sql);
		$aantal = mysqli_num_rows($result);

		echo "aantal configuraties: ".$aantal;
		echo "<table class='table'>
				<tr>
					<th>gebruiker</th>
					<th>configuratie 1.</th>
					<th>configuratie 2.</th>";

				if (isset($_SESSION['ingelogd'])) {
					print <<<END
					<th>configuratie toevoegen</th>
					<th>wijzigen</th>
					<th>verwijderen</th>

END;
					}
				"</tr>";

		while ($row = mysqli_fetch_assoc($result)) {

			echo
			"<tr>
				<td>" .$row['username']. " ".$row['achternaam'].  "</td>
				<td>" .$row['config1']."</td>
				<td>" .$row['config2']."</td>";

	if (isset($_SESSION['ingelogd'])) {
						$id = $row['user_id'];

						print <<<END
						<td><a href='index.php?page=toevoegen1&gebruikersId={$id}'>toevoegen</a></td>
END;
						$id = $row['id'];
						print <<<END
						<td><a href="index.php?page=bewerken1&configuratieId={$id}">Bewerken</a></td>
						<td><a href="index.php?page=configuratie&delete={$id}">verwijderen</a></td>				
END;
		}

				echo "</tr>";


			
		}
	echo "</table>";		
	}




?>


