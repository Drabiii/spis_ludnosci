<?php
include_once 'skryptyPHP\polacz.php';
function adduser(){
    #Połączenie z bazą. ::
        $conn = polacz();
        if(!$conn){
            echo "Błąd połączenia!";
        }  
    //====
    #Sprawdzanie pól tekstowych. ::
    if (!isset($_POST['imien']) && !isset($_POST['email']) && !isset($_POST['kp']) && !isset($_POST['numer'])){
        echo " ";
    }else{
    //====
    #Zmienne ::
        $imien2=$_POST['imien'];
        $email2=$_POST['email'];
        $kp2=$_POST['kp'];
        $numer2=$_POST['numer'];
    //====
    #Dodanie do bazy danych ::
        $sql2 = "INSERT INTO `dodane`(`id`,`imien`,`email`,`kp`,`numer`) VALUES (NULL,'$imien2','$email2','$kp2','$numer2');";
        $wyn2=mysqli_query($conn, $sql2);
        echo "<p>Poprawnie dodano wpis!</p>";
    }
        mysqli_close($conn);
    }
?>