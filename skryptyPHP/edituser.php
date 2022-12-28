<?php
include_once 'skryptyPHP\polacz.php';
include_once 'skryptyPHP\select.php';
function edituser(){
    #Połączenie z bazą. ::
        $conn = polacz();
        if(!$conn){
            echo "Błąd połączenia!";
        }   
    //====
    #Sprawdzanie pól tekstowych. ::
        if (!isset($_POST['id']) && !isset($_POST['imien']) && !isset($_POST['email']) && !isset($_POST['kp']) && !isset($_POST['numer'])){
        echo " ";
        }else{
            $id3=$_POST['id'];
            $imien3=$_POST['imien'];
            $email3=$_POST['email'];
            $kp3=$_POST['kp'];
            $numer3=$_POST['numer'];

            $sql4="SELECT COUNT(`id`) FROM `dodane` WHERE `id`='{$id3}';";
            $wyn4=mysqli_query($conn, $sql4);
            $row4=mysqli_fetch_assoc($wyn4);

        if ($row4["COUNT(`id`)"]==0){
            echo "<h3>Wprowadzono nie prawidłowe ID!!!</h3>";
        }elseif ($row4["COUNT(`id`)"]==1){
        $sql3 = "UPDATE `dodane` SET `imien`='{$imien3}',`email`='{$email3}',`kp`='{$kp3}',`numer`='{$numer3}' WHERE `dodane`.`id`='{$id3}';";
        $wyn3=mysqli_query($conn, $sql3);
        echo "<p>Poprawnie edytowano wpis!</p>";
        }
        }   
        mysqli_close($conn);
    }
?>