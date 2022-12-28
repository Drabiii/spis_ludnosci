<?php  
#Skrypt 1 :: 
    function skrypt1(){
    #Połączenie z bazą. ::
        $conn=mysqli_connect("localhost", "root", "", "osoby");
            if (mysqli_error($conn)){
                echo "Nie masz połączenia z bazą danych.".mysqli_error($conn);
            exit();
            }
    //====
    #Sprawdzanie pól tekstowych. ::
        if (empty($_POST['imien']) || empty($_POST['email']) || empty($_POST['kp']) || empty($_POST['numer'])){
        echo "<h2>Wprowadź WSZYSTKIE dane aby dodać osobę!</h2>";
        }
        else{
    //====
    #Zmienne ::
        $imien=$_POST['imien'];
        $email=$_POST['email'];
        $kp=$_POST['kp'];
        $numer=$_POST['numer'];
    //====
    #Powiększenie id o 1 ::
            $que = mysqli_query($conn,"SELECT id FROM weryfikacja ORDER BY id DESC LIMIT 1");
            $row = $que -> fetch_assoc();
            $idw=((int) $row['id']);
            $id=$idw+1;
    //====
    #Dodanie do bazy danych ::
        $sql = "INSERT INTO `weryfikacja`(`id`,`imien`,`email`,`kp`,`numer`) VALUES ('$id','$imien','$email','$kp','$numer');";  //podstawowe query
        $wyn=mysqli_query($conn, $sql);
            if ($wyn){
                echo "<h2>Poprawnie dodano wpis!</h2>";
                echo "<h2>Wpis czeka na zakceptowanie przez administratora.</h2>";
            }
            else{
                echo "Błąd!";
            }
        }
        mysqli_close($conn);
    }
//====
?>


<!-- DODAWANIE HTML -->


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Powszechy Spis Ludności</title>
    <link href="style\stylb.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div>
<!-- Napis 1 -->
    <header class="gora">
        <h1>Powszechny spis ludności</h1>
        <h1>Dodaj Osobę!</h1>
    </header>

<!-- Formularz -->
        <form method="POST" action="index2.php" >
            <h2>Wprowadź WSZYSTKIE! dane aby dodać: </h2>
                <input type="text" id="Imie i Nazwisko" maxlength="30" name="imien" placeholder="Imie i Nazwisko" required />
                <input type="text" maxlength="30" id="Adres e-mail" name="email" placeholder="Adres e-mail" required />
                <input type="text" maxlength="6" id="Kod Pocztowy" name="kp" placeholder="Kod Pocztowy" required />
                <input type="text" maxlength="9" id="Telefon" name="numer" placeholder="Numer Telefonu" required />
                <input type="submit" onclick="skrypt1()" value="DODAJ!" />
        </form>
<!-- Wynik Skryptu -->
    <div class="wynik">
    <h1>Wynik dodawania do bazy danych!</h1>
       <?php if($_SERVER['REQUEST_METHOD']=='POST') skrypt1(); ?>
    </div> 
<!-- Stopka -->
    <footer class="index1">
        <h3>Chcesz Wyszukać Osobę ?</h3>
        <a href="index1.php">Klik!</a>
        <br>
        <p>Autor: Mateusz Drabowicz</p>
        <p>Copyright © Mateusz Drabowicz 2021.</p>
    </footer>
</div>
</body>
</html>