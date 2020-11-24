
    <?php
    if ($_POST){
        $username = $_POST['username'];
        $password = $_POST['password'];


        if (!empty($username) and !empty($password)){
        


        if ($conn) {
             $sql = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'";
                $result = mysqli_query($conn,$sql);
                echo "Aantal rijen: ".mysqli_num_rows ($result);
                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_array($result);
                	$_SESSION['ingelogd'] = 'ja';
                    $_SESSION['achternaam'] = $row['achternaam'];
                    header("Location: index.php");
            }else{
                echo "<p style='color: red' >deze combinatie van gebruikersnaam een wachtwoord klopt niet!</p>";
            }

        }

        }else{
            echo "<p style='color: red' >Beide velden invullen graag!</p>";
        }
    }

?>
    <form action="" method="POST" class="inloggen">
        <input class="inputInloggen" type="text" name="username" placeholder=" Gebruikersnaam"><br>
        <input class="inputInloggen"  type="password" name="password" placeholder=" Wachtwoord"><br>
        <input class="inputInloggen"  type="submit" name="submit" value="inloggen">
    </form>

    <?php
        if (isset($_SESSION['achternaam'])) {
            echo "<br><br>Welkom u bent ingelogd ".$_SESSION['achternaam']; 

        }else{
            echo "<br><br>Welkom u bent niet ingelogd"; 
        }    

    ?>
