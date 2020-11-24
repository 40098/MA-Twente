<?php
$incidentenid='';
$incident1='';
$incident2='';
$incident3='';

$conn = mysqli_connect('localhost', 'root', '', 'twente') or die('fout database');

    if($_POST){
        $incidentenid = $_POST['incidentenid'];
        $incident1 = $_POST['incident1'];
        $incident2 = $_POST['incident2'];
        $incident3 = $_POST['incident3'];


         if (empty($incidentenid) or empty($incident1) or empty($incident2) ) {
                $melding = "Vul alle gegevens in...";
            } else {
                $sql = "INSERT INTO incidenten SET
                incidentenid = '{$incidentenid}',
                incident1 = '{$incident1}',
                incident2 = '{$incident2}',
                incident3 = '{$incident3}'
                ";                      
               
               echo $sql;

            if (mysqli_query($conn, $sql)){
                header("location: index.php?page=incidentenoverzicht");
            } else {
                $melding = "incident gegevens zijn niet opgeslagen in de database! <br />";
            }
            }

    }
if (!empty($melding)){
    print '<p style="color:red;">'.$melding. '</p>';
}


?>

<form action="" method="post">
    <table>
        <tr>
            <td>Naam:</td>
            <td><input class="a" type="text" name="incidentenid" value="<?php echo $incidentenid ?>"/></td>
        </tr>
        <tr>
            <td>Incident:</td>
            <td><textarea rows='4' name="incident1"><?php echo $incident1 ?></textarea></td>
        </tr>
        <tr>
            <td>Datum:</td>
            <td><input class="a" type="date" name="incident2" placeholder="dd/mm/jj" value="<?php echo $incident2 ?>"><br></td>
        </tr>
        <tr>
            <td>Gevolg van incident:</td>
            <td><select name="incident3" value="<?php echo $incident3 ?>">
                <option class="bee" value="5">niemand kan werken</option>
                <option class="bee" value="5">Kunnen niet werken, orders worden gemist en/of afspraken worden niet gehaald</option>
                <option class="cee" value="4">Kan niet werken</option>
                <option class="cee" value="4">Kunnen niet werken met 1 programma</option>
                <option class="dee" value="3">Kan niet werken met 1 programma</option>
                <option class="dee" value="3">Er is een workaround aanwezig</option>
                <option class="eee" value="2">Niet reproduceerbare fout</option>
                <option class="fff" value="1">Incident afgehandeld</option>
            </select>
        </td>
    <tr>
            <td><input class="b" type="submit" name="submit" value="Opslaan"><br></td>
        </tr>
    </table>
</form>

<?php
    echo "vandaag:" . date("h:i - d/m/Y") . "<br>";
?>

<style>

table{
    width: 500px;
}

textarea{
    width: 250px;
}
.a{
    width: 200px;
}
.b{
}

.bee{
    background-color: red;
}
.cee{
    background-color: orange;
}
.dee{
    background-color: yellow;
}
.eee{
    background-color: grey
}
.fff{
   background-color: green;
}
</style>