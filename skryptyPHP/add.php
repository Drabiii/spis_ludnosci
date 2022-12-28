<?php
include_once 'skryptyPHP\polacz.php';
   function add(){
    #połączenie ::
        $conn = polacz();
        if(!$conn){
            echo "Błąd połączenia!";
        }
    #Sprawdzenie czy $_POST Jest pusty ::
        if (empty($_POST['idadd'])){
            echo " ";
        }
        else{
    #Sprawdzanie czy ID jest poprawne ::
        $id1=$_POST['idadd'];
        $query1="SELECT COUNT(`id`) FROM `weryfikacja` WHERE `id`='{$id1}';";
        $wyn1=mysqli_query($conn, $query1);
        $row1=mysqli_fetch_assoc($wyn1);

                #$row["COUNT(`id`)"];

        if ($row1["COUNT(`id`)"]==0){
            echo "<h3>Wprowadzono nie prawidłowe ID!!!</h3>";
        }elseif ($row1["COUNT(`id`)"]==1){
            $query2="SELECT * FROM `weryfikacja` WHERE `id`='{$id1}';";
            $res1=mysqli_query($conn, $query2);
            $tb=mysqli_fetch_assoc($res1);
    //====
    #Zmienne ::
            $imien1=$tb['imien'];
            $email1=$tb['email'];
            $kp1=$tb['kp'];
            $numer1=$tb['numer'];
    //====
    #Dodawanie i usuwanie pomiedzy tabelami ::
            $query3="INSERT INTO `dodane`(`id`,`imien`,`email`,`kp`,`numer`) VALUES (NULL, '$imien1', '$email1', '$kp1', '$numer1');";
            $query4="DELETE FROM `weryfikacja` WHERE `id`='{$id1}';";
            mysqli_query($conn, $query3);
            mysqli_query($conn, $query4);
            echo "Poprawnie wykonano operacje!";
        }
        }
    //===
        mysqli_close($conn);
    }
?>