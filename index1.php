<?php 
#Skrypt 1 ::  
    function skrypt1(){
    #Połączenie z bazą ::
        $conn=mysqli_connect("localhost", "root", "", "osoby");
        if (mysqli_error($conn)){
        echo "Nie masz połączenia z bazą danych.".mysqli_error($conn);
        exit();
        }
    //====
    #Zmienne ::
        $imien=$_POST['imien'];
        $email=$_POST['email'];
        $kp=$_POST['kp'];
        $numer=$_POST['numer'];
    //====
    #Sprawdzanie pól TXT czy są puste ::
        if (empty($_POST['imien']) && empty($_POST['email']) && empty($_POST['kp']) && empty($_POST['numer'])){
            echo " ";
        }
        else{
    //====
    #Zapytanie do bazy  ::
        $sql = "SELECT * FROM `dodane` ";  //podstawowe query
        
        if (!is_null($imien) && strlen($imien) > 0) {
            $w[]= " `imien` = '{$imien}'";
        }
        if (!is_null($email) && strlen($email) > 0) {
            $w[]= " `email` = '{$email}'";
        }
        if (!is_null($numer) && strlen($numer) > 0) {
            $w[]= " `numer` = '{$numer}'";
        }
        if (!is_null($kp) && strlen($kp) > 0) {
            $w[]= " `kp` = '{$kp}'";
        }

        $w = implode(" AND ", $w);
        if (strlen($w) > 0) {
            $sql .= " WHERE " . $w;
        }
        $wyn=mysqli_query($conn, $sql);
        
        while ($row=mysqli_fetch_array($wyn)){
            echo "<hr>";
            echo "<h3>".$row["imien"].", ".$row["email"].", ".$row["kp"].", ".$row["numer"]."</h3>";
            echo "<hr>";
        }
        }
        mysqli_close($conn);
    }
//====
?>


<!-- wyszukiwanie -->


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Powszechy Spis Ludności</title>
    <link href="style\styla.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div>
<!-- Napis 1 -->
    <header class="gora">
        <h1>Powszechny spis ludności</h1>
        <h1>Wyszukaj Osoby!</h1>
    </header>
<!-- Formularz -->
        <form method="POST" action="index1.php" >
        <h2>Wprowadź dowlone dane aby wyszukać: </h2>
                <input type="text" id="Imie i Nazwisko" maxlength="30" name="imien" placeholder="Imie i Nazwisko" />
                <input type="text" maxlength="30" id="Adres e-mail" name="email" placeholder="Adres e-mail" />
                <input type="text" maxlength="6" id="Kod Pocztowy" name="kp" placeholder="Kod Pocztowy" />
                <input type="text" maxlength="9" id="Telefon" name="numer" placeholder="Numer Telefonu" />
                <input type="submit" onclick="skrypt1()" value="WYSZUKAJ OSOBĘ!" />
        </form>
<!-- Wywołanie Skryptu -->
    <div class="wynik">
        <h1>Tutaj wyświetli się osoba, której szukałeś/aś: </h1>
        <?php if($_SERVER['REQUEST_METHOD']=='POST') skrypt1(); ?>
    </div> 
<!-- Stopka -->
    <footer class="index2">
        <h3>Chcesz dodać Osobę ?</h3>
        <a href="index2.php">Klik!</a>
        <br>
        <p>Autor: Mateusz Drabowicz</p>
        <p>Copyright © Mateusz Drabowicz 2021.</p>
    </footer>
</div>
</body>
</html>