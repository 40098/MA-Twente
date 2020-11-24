

<?php  
    $conn = mysqli_connect('localhost','root','','twente') or die('kan geen verbinding maken');
        if (isset($_GET['delete'])) {
        $sql = "DELETE FROM incidenten WHERE id={$_GET['delete']}";
        $result = mysqli_query($conn,$sql);
    }

    if ($conn) {
        
        $sql = "SELECT * FROM incidenten";

        $result = mysqli_query($conn,$sql);
        $aantal = mysqli_num_rows($result);

        echo "aantal incidenten: ".$aantal;
        echo "<table border='2'>
                <tr>
                    <th>Naam</th>
                    <th>Incident</th>
                    <th>Datum</th>
                    <th>Urgentie</th>
                    <th>verwijderen</th>";
                
                 if (isset($_SESSION['ingelogd'])) {
                    echo "<th><a href='index.php?page=incidententoevoegen'>toevoegen</a></th>";

                }

                echo "</tr>";

                

        while ($row = mysqli_fetch_assoc($result)) {

            echo
            "<tr>
                <td>" .$row['incidentenid']."</td>
                <td>" .$row['incident1']."</td>
                <td>" .$row['incident2']."</td>
                <td>" .$row['incident3']."</td>";
                $id = $row['id'];
                if (isset($_SESSION['ingelogd'])) {
                        print <<<END
                        <td><a href="index.php?page=incidentenoverzicht&delete={$id}">verwijderen</a></td>             
END;
                }

                echo "</tr>";


        }
        echo "</table>";
    echo "vandaag:" . date("h:i - d/m/Y") . "<br>";
}



        

?>


                    