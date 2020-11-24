<?php
session_start();
    if (isset($_GET['logout'])){
    session_unset();
    }

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stijl.css">
    <title>MA-Twente</title>
    <nav>
        <a href="index.php?page=home">Home</a>
        <a href="index.php?page=contact">Contact</a>
            <?php
                if (isset($_SESSION['ingelogd'])) {
                    print '<a href="index.php?page=configuratie">configuratie</a>
                        <a href="index.php?page=gebruikers">gebruikers</a>
                        <a href="index.php?page=incidentenoverzicht">Incidenten</a>
                        <a href="index.php?logout=1">uitloggen</a>';
                }else {
                    print '<a href="index.php?page=inloggen">inloggen</a>';
                }
            ?>
    </nav>
</head>
<div style="color: white;">
<body>



    <center><h1>MA-Twente</h1></center>


<?php
    $conn = mysqli_connect('localhost','root','','twente') or die('kan geen verbinding maken');
    if (!isset($_GET['page'])) {
        include ("home.php");
    }else {
        include ($_GET['page'].'.php');
    }
?>



</body>
<footer>

    <h2>Contact gegevens</h2>
    <p>MA-Twente<br></p>

</footer>

</div>
</html> 